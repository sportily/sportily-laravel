<?php
namespace Sportily\Laravel\Facades;

class Images extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Images';
    }

}
