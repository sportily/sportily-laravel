<?php
namespace Sportily\Laravel\Facades;

class Events extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Events';
    }

}
