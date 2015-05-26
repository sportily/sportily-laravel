<?php
namespace Sportily\Laravel\Endpoints;

class Roles extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Roles';
    }

}
