<?php error_reporting(-1);



/*$i = 200;

switch ($i) {
    case 1:

    case 2:

    case 3:
        echo "Переменная < 4";
        break;
    case 4:
        echo 4;
        break;
    default:
        echo "Переменная > 4";

}*/

$i = 2;

/*$res = match ($i) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    4 => 'Four',
    5 => 'Five'
    };*/

/*$res = match ($i) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    4 => 'Four',
    5 => 'Five',
    default => 'No res'
};*/

$res = match ($i) {
    1, 2, 3 => 'Var < 4',
    4 => 'Four',
    default => 'Var > 4'
};

echo $res;


$grade = 10;
/*$res = match (true) {
    ($grade >= 10) => 'excellent',
    ($grade >= 7) => 'good',
    ($grade >= 3) => 'bad',
    default => 'Go home!',

};*/

/*$res = match (true) {
    ($grade >= 7) => 'good',
    ($grade >= 10) => 'excellent',
    ($grade >= 3) => 'bad',
    default => 'Go home!',

};*/

/*$res = match (true) {
    ($grade >= 10) && ($grade < 13) => 'excellent',
    ($grade >= 7) && ($grade < 10) => 'good',
    ($grade >= 3) && ($grade < 7) => 'bad',
    default => 'Go home!',

};

echo $res;*/
















