function updatePlan($week, $team, $employee, $day, $hours) {
    $xml = simplexml_load_file('plan.xml');
    foreach ($xml->week as $weekPlan) {
        if ((string) $weekPlan['name'] === $week) {
            foreach ($weekPlan->team as $teamPlan) {
                if ((string) $teamPlan['name'] === $team) {
                    foreach ($teamPlan->employee as $emp) {
                        if ((string) $emp['name'] === $employee) {
                            foreach ($emp->day as $d) {
                                if ((string) $d['name'] === $day) {
                                    $d['hours'] = $hours;
                                    $xml->asXML('plan.xml');
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}
