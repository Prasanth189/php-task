function renderWeeksDropdown() {
    $weeks = loadWeeks();
    echo '<select id="week-select" onchange="loadPlanForWeek()">';
    foreach ($weeks as $week) {
        $weekDetails = explode(',', $week);
        echo '<option value="' . trim($weekDetails[0]) . '">' . trim($weekDetails[0]) . ' (' . trim($weekDetails[1]) . ' - ' . trim($weekDetails[2]) . ')</option>';
    }
    echo '</select>';
}
