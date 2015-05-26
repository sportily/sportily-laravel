<?php
namespace Sportily\Laravel\Endpoints;

class Participants extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Participants';
    }

}
