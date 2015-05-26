<?php
namespace Sportily\Laravel;

class Endpoint {

    private $class;

    public function __construct($class) {
        $this->class = 'Sportily\\' . $class;
    }

    public function all($query = []) {
        return $this->delegate('all', [ $query ]);
    }

    public function retrieve($id) {
        return $this->delegate('retrieve', [ $id ]);
    }

    public function create($data) {
        return $this->delegate('create', [ $data ]);
    }

    public function update($id, $data) {
        return $this->delegate('update', [ $id, $data ]);
    }

    public function delete($id) {
        return $this->delegate('delete', [ $id ]);
    }

    private function delegate($method, $arguments) {
        return forward_static_call_array([ $this->class, $method ], $arguments);
    }

}
