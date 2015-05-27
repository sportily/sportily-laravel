<?php
namespace Sportily\Laravel\Facades;

class AgeGroups extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.AgeGroups';
    }

}
