<?php
namespace Sportily\Laravel\Endpoints;

class Seasons extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Seasons';
    }

}