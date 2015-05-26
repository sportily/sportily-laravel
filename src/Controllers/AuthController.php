<?php
namespace Sportily\Laravel\Controllers;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Input;
use Redirect;
use Session;
use Sportily\Api;
use Sportily\OAuth;

class AuthController extends Controller {

	/**
	 * Exchange an auth code for an access token, then send the user back to
	 * the home page, now logged in.
	 *
	 * @return mixed
	 */
	public function callback() {
        $auth_code = Input::get('code');

        if ($auth_code) {
            $response = OAuth::token($auth_code);
            $access_token = $response['access_token'];
            $expiry_date = Carbon::now()->addSeconds($response['expires_in']);

            Session::set('access_token', $access_token);
            Session::set('access_token_expiry', $expiry_date);
            Api::setAccessToken($access_token);
        }

        return Redirect::to('/');
    }

}
