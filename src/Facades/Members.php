<?php
namespace Sportily\Laravel\Facades;

class Members extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Members';
    }

}
