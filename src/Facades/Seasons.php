<?php
namespace Sportily\Laravel\Facades;

class Seasons extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Seasons';
    }

}
