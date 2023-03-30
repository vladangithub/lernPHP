<?php error_reporting(-1);

/*$i = 1900;
while ($i <= 2021) {
    echo "<select border = "1" width = "100%">;
    $i</br>
    </select>";
    $i++;

}*/
/*
echo '<select>';
$i = 1900;
while ($i <= 2023) {
    echo "<option>$i<br></option>";
    $i++;

}
echo '</select>';*/


/*$year = 1900;

echo "<select>";
while ($year <= 2023) {
    echo "<option>$year</option>";
    $year++;
    echo "</select>";
}*/

/*$year = 1900;

echo "<select>";
while ($year <= 2021) {
    echo "<option value='{$year}'>{$year}</option>";
    $year++;
}
echo "</select>";*/

$year = 1900;
echo '<select>';
while ($year <= 2023) {
    echo "<option value='$year'>{$year}</option>";
    $year++;
}
echo '</select>';

































echo '<table border = "1" width = "100%">';
$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 10) {
        echo "<td>" . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '</table>';











