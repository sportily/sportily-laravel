<?php
namespace Sportily\Laravel\Facades;

class People extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.People';
    }

}
