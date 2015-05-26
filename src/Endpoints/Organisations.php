<?php
namespace Sportily\Laravel\Endpoints;

class Organisations extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Organisations';
    }

}
