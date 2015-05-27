<?php
namespace Sportily\Laravel\Endpoints;

use DateTime;

class Fixtures extends Endpoint {

    public function upcoming($competition_id) {
        $fixtures = $this->all([ 'competition_id' => $competition_id, 'period' => 'future' ]);
        $grouped = $this->groupFixturesByDay($fixtures);
        return head($grouped);
    }

    public function latest($competition_id) {
        $fixtures = $this->all([ 'competition_id' => $competition_id, 'period' => 'past' ]);
        $grouped = $this->groupFixturesByDay($fixtures);
        return last($grouped);
    }

    private function groupFixturesByDay($fixtures) {
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
