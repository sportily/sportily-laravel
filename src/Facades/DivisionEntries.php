<?php
namespace Sportily\Laravel\Facades;

class DivisionEntries extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.DivisionEntries';
    }

}
