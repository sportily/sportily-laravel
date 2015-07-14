<?php
namespace Sportily\Laravel\Facades;

class Trial extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Trial';
    }

}
