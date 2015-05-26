<?php
namespace Sportily\Laravel\Endpoints;

class Users extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Users';
    }

}
