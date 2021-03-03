<?php
$nilai = 'F';

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" .PHP_EOL;

}