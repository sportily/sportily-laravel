<?php
namespace Sportily\Laravel\Endpoints;

class Files extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Files';
    }

}
