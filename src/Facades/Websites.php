<?php
namespace Sportily\Laravel\Facades;

class Websites extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Websites';
    }

}
