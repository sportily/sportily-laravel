<?php
namespace Sportily\Laravel\Endpoints;

class Posts extends Endpoint {

    public function published($organisation_id) {
        return $this->all([ 'organisation_id' => $organisation_id, 'status' => 'published' ]);
    }
}
