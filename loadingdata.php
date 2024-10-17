function loadWeeks() {
    $weeks = file('weeks.txt');
    return $weeks;
}

function loadTeams() {
    $teams = file('teams.txt');
    return $teams;
}

function loadEmployees() {
    $employees = file('employees.txt');
    return $employees;
}

function loadPlan($week) {
    $xml = simplexml_load_file('plan.xml');
    foreach ($xml->week as $weekPlan) {
        if ((string) $weekPlan['name'] === $week) {
            return $weekPlan;
        }
    }
    return null;
}
