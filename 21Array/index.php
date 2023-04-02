<?php error_reporting(-1);

$arr1 = array();
/*$arr2 = [];

var_dump($arr, $arr2);*/
$arr1 = [
    1 =>'Ivanov', 3 =>'Petrov', 'Siderov'
];

$arr1[7] = 'Xiderov';
$arr1[] = 'Fiderov';
$arr1[] = 10;
$arr1[] = 1.2302;

echo '<pre>' . print_r($arr1, 1) . '</pre>';
echo $arr1[7];