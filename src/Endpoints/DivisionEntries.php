<?php
namespace Sportily\Laravel\Endpoints;

class DivisionEntries extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.DivisionEntries';
    }

}
