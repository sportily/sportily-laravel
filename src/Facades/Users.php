<?php
namespace Sportily\Laravel\Facades;

class Users extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Users';
    }

}
