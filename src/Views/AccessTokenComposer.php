<?php
namespace Sportily\Laravel\Views;

use Illuminate\Contracts\View\View;
use Sportily\Api;

class AccessTokenComposer {

    public function compose(View $view) {
        $view->with('access_token', Api::getAccessToken());
    }

}
