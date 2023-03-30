<?php error_reporting(-1);
/*
$num = 1;
while ($num <= 10) {
    echo "{$num}<br>";
    $num++;
}

for ($num = 1; $num <= 10; $num++) {
    echo "{$num}<br>";
}*/

/*for($col = 'R'; $col != 'AD'; $col++) {
    echo $col.' ' . "<br />";
}


for ($date = strtotime("2014-01-01"); $date < strtotime("2014-02-01"); $date = strtotime("+1 day", $date)) {
    echo date("Y-m-d", $date) . "<br />";
}*/

/*for ($i = 20; $i >= 0; $i--) {
    var_dump("{$i}");
}*/


echo "<select>";
for ($year = 1900; $year <= 2023; $year++) {
    echo"<option>{$year}</option>";
}
echo"</select>";

/*echo '<table border = "1px" width = "100%">';
$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td> $td * $tr = " . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '</table>';*/

echo '<table border = "1px" width = "100%">';
for ($tr = 1; $tr < 10; $tr ++) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td ++) {
        echo "<td> $td * $tr = " . $td * $tr . "</td>";
    }
    echo "</tr>";
}
echo '</table>';



















