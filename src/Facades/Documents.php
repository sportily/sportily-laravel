<?php
namespace Sportily\Laravel\Facades;

class Documents extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Documents';
    }

}
