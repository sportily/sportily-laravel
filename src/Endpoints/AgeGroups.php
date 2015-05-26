<?php
namespace Sportily\Laravel\Endpoints;

class AgeGroups extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.AgeGroups';
    }

}
