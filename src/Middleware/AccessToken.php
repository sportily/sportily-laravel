<?php
namespace Sportily\Laravel\Middleware;

use Carbon\Carbon;
use Closure;
use Config;
use Session;
use Sportily\Oauth;
use Sportily\Api;

class AccessToken {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        # setup the api client library.
		Api::setBaseUrl(Config::get('app.sportily_base_url'));
		Api::setApiKeys(Config::get('app.sportily_client_id'), Config::get('app.sportily_client_secret'));
		Api::setRedirectUrl(Config::get('app.sportily_redirect_url'));

		# look for an existing access token.
		$access_token = Session::get('access_token', null);
	    $expiry_date = Carbon::parse(Session::get('access_token_expiry', null));
	    $now = Carbon::now();

	    # if there is no access token, we must obtain one for the client.
		if ($access_token == null || $expiry_date->lte($now)) {
	        $response = OAuth::token();
	        $access_token = $response['access_token'];
	        $expiry_date = Carbon::now()->addSeconds($response['expires_in']);
		}

		# store the access token in the session for later use.
	    Session::set('access_token', $access_token);
	    Session::set('access_token_expiry', $expiry_date);
	    Api::setAccessToken($access_token);

		# permit the action.
		return $next($request);
	}

}
