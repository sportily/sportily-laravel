<?php
namespace Sportily\Laravel\Endpoints;

class Organisations extends Endpoint {

    public function retrieveBySubdomain($subdomain) {
        return head(array_get($this->all(['subdomain' => $subdomain]), 'data'));
    }

}
