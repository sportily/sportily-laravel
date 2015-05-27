<?php
namespace Sportily\Laravel\Facades;

class Posts extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Posts';
    }

}
