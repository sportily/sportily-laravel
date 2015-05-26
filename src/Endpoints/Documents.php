<?php
namespace Sportily\Laravel\Endpoints;

class Documents extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Documents';
    }

}
