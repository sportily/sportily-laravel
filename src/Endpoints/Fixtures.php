<?php
namespace Sportily\Laravel\Endpoints;

use DateTime;

class Fixtures extends Endpoint {

    public function upcoming($competition_id) {
        $filter = ['competition_id' => $competition_id, 'period' => 'future'];
        return head($this->grouped($filter));
    }

    public function latest($competition_id) {
        $filter = ['competition_id' => $competition_id, 'period' => 'past'];
        return last($this->grouped($filter));
    }

    public function grouped($filter) {
        $fixtures = $this->all($filter);
        return array_reduce($fixtures['data'], function($result, $fixture) {
            $date = (new DateTime($fixture['start_time']))->format('Y-m-d');
            if (!isset($result[$date])) {
                $result[$date] = [];
            }
            $result[$date][] = $fixture;
            return $result;
        }, []);
    }

}
