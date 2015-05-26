<?php
namespace Sportily\Laravel\Endpoints;

class Fixtures extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Fixtures';
    }

}
