<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$mapFunction = fn(int $value) => $value * 10;

$dataresult = array_map($mapFunction, $data);
var_dump($dataresult);
