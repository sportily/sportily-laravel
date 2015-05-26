<?php
namespace Sportily\Laravel\Views;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\View\View;
use Sportily\Profile;

class ProfileComposer {

    public function compose(View $view) {
        $profile = null;

        try {
            $profile = Profile::retrieve()->wait();
        } catch (RequestException $exception) {
            //
        }

        $view->with('profile', $profile);
    }

}
