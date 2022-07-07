<p id="gender">
                            <?php
    $selected_day = "Day"; //current day

    echo '<select id="day" class="dateInput" name="day" required>'."\n";
    echo '<option value="day">Day</option>'."\n";
    for ($i_day = 1; $i_day <= 31; $i_day++) { 
        $selected = ($selected_day == $i_day ? ' selected' : '');
        echo '<option value="'.$i_day.'"'.$selected.'>'.$i_day.'</option>'."\n";
    }
    echo '</select>'."\n";
?>
                            <!--For Month-->

                            <?php
    $selected_month = "Month"; //current month

    echo '<select id="month" class="dateInput" name="month" required>'."\n";
    echo '<option value="month">Month</option>'."\n";
    for ($i_month = 1; $i_month <= 12; $i_month++) { 
        $selected = ($selected_month == $i_month ? ' selected' : '');
        echo '<option value="'.$i_month.'"'.$selected.'>'. date('F', mktime(0,0,0,$i_month)).'</option>'."\n";
    }
    echo '</select>'."\n";
?>
                            <?php 
    $year_start  = 1940;
    $year_end = date('Y'); // current Year
    $user_selected_year = date('y'); // user date of birth year

    echo '<select id="year" class="dateInput" name="year" required>'."\n";
    echo '<option value="year">Year</option>'."\n";
    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
        $selected = ($user_selected_year == $i_year ? ' selected' : '');
        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'</option>'."\n";
    }
    echo '</select>'."\n";
?>

                        </p>