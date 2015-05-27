<?php
namespace Sportily\Laravel\Facades;

class Divisions extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Divisions';
    }

}
