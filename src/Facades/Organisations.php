<?php
namespace Sportily\Laravel\Facades;

class Organisations extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Organisations';
    }

}
