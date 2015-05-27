<?php
namespace Sportily\Laravel\Facades;

class Roles extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Roles';
    }

}
