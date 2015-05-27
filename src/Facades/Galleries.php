<?php
namespace Sportily\Laravel\Facades;

class Galleries extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Galleries';
    }

}
