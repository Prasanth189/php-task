function renderPlanTable($week) {
    $weekPlan = loadPlan($week);
    
    if ($weekPlan === null) {
        echo 'No data available for this week';
        return;
    }

    echo '<table border="1">';
    echo '<tr><th></th><th>Sun ' . $weekPlan['from'] . '</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat ' . $weekPlan['to'] . '</th><th>Total</th></tr>';

    foreach ($weekPlan->team as $team) {
        $teamTotal = 0;
        echo '<tr><td><strong>' . $team['name'] . '</strong></td>';
        foreach ($team->employee as $employee) {
            $empTotal = 0;
            echo '<tr><td>' . $employee['name'] . '</td>';
            foreach ($employee->day as $day) {
                echo '<td>' . $day['hours'] . '</td>';
                // Logic to add time and calculate total
            }
            echo '<td>' . $empTotal . '</td></tr>';
            $teamTotal += $empTotal;
        }
        echo '<tr><td><strong>' . $team['name'] . ' Total</strong></td><td colspan="7"></td><td>' . $teamTotal . '</td></tr>';
    }
    echo '</table>';
}
