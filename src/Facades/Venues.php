<?php
namespace Sportily\Laravel\Facades;

class Venues extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Venues';
    }

}
