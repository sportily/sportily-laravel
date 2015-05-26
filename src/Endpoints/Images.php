<?php
namespace Sportily\Laravel\Endpoints;

class Images extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Images';
    }

}
