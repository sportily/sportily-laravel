<?php
namespace Sportily\Laravel\Middleware;

use Cache;
use Carbon\Carbon;
use Closure;
use Config;
use Session;
use Sportily\OAuth;
use Sportily\Api;

class AccessToken {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		$now = Carbon::now();

        # look for a token in the session.
		list($token, $expiry) = $this->getSessionToken();
		if ($token == null || $expiry->lte($now)) {

			# look for a token in the cache.
			list($token, $expiry) = $this->getCachedToken();
			if ($token == null || $expiry->lte($now)) {

				# still nothing, then we'll have to get a new one.
				list($token, $expiry) = $this->getNewToken();
				Cache::forever('access_token', $token);
				Cache::forever('access_token_expiry', $expiry);
			}
		}

		# store the access token in the session for later use.
	    Session::set('access_token', $token);
	    Session::set('access_token_expiry', $expiry);
	    Api::setAccessToken($token);

		# permit the action.
		return $next($request);
	}

	private function getSessionToken() {
		$token = Session::get('access_token', null);
	    $expiry = Carbon::parse(Session::get('access_token_expiry', null));
		return [ $token, $expiry ];
	}

	private function getCachedToken() {
		$token = Cache::get('access_token', null);
		$expiry = Carbon::parse(Cache::get('access_token_expiry', null));
		return [ $token, $expiry ];
	}

	private function getNewToken() {
		$response = OAuth::token();
		$token = $response['access_token'];
		$expiry = Carbon::now()->addSeconds($response['expires_in']);
		return [ $token, $expiry ];
	}

}
