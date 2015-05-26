<?php
namespace Sportily\Laravel\Endpoints;

class Divisions extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Divisions';
    }

}
