<?php
namespace Sportily\Laravel\Facades;

class Competitions extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Competitions';
    }

}
