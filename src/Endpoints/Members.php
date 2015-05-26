<?php
namespace Sportily\Laravel\Endpoints;

class Members extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Members';
    }

}
