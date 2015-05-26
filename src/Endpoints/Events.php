<?php
namespace Sportily\Laravel\Endpoints;

class Events extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Events';
    }

}
