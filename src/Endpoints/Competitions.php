<?php
namespace Sportily\Laravel\Endpoints;

class Competitions extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Competitions';
    }

}
