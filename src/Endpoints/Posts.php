<?php
namespace Sportily\Laravel\Endpoints;

class Posts extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'sportily.endpoints.Posts';
    }

}
