<?php error_reporting(-1);


/*$i = 1;
while ($i < 9) {
    echo "$i<br>";
    $i++;
}*/

//var_dump(4 % 2);

//for ($i = 1; $i <= 20; $i++) {
//    if ($i % 2 != 0) {
//        $i++;
//        continue;
//    }
//    echo "{$i}<br>";
//    $i++;
//}

// Чётные
/*$i = 1;
while ($i < 10) {
    if ($i % 2) {
        $i++;
        continue;
    }
    echo "$i<br>";
    $i++;
}

// НЕЧётные
$i = 1;
while ($i < 10) {
    if (!($i % 2)) {
        $i++;
        continue;
    }
    echo "$i<br>";
    $i++;
}*/

/*echo '<table border = "1px" width = "100%">';
for ($tr = 1; $tr < 10; $tr ++) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td ++) {
        if ($td == 5) {
            continue 1;
        }
        echo "<td> $td</td>";
    }
    echo "</tr>";
}
echo '</table>';*/

$i = 1;

while (true) {
    echo "$i<br>";
    if ($i == 20) {
        echo 'Число найдено!';
        break;
    }
    $i++;
}
























