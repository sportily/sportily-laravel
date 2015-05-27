<?php
namespace Sportily\Laravel\Facades;

class Teams extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Teams';
    }

}
