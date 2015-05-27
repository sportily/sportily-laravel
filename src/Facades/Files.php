<?php
namespace Sportily\Laravel\Facades;

class Files extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Files';
    }

}
