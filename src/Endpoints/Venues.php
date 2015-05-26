<?php
namespace Sportily\Laravel\Endpoints;

class Venues extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Venues';
    }

}
