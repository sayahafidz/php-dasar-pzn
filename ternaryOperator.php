<?php
// ternary operator adalah cara singkat dari if statement
$gender = 'PRIA';
// cara penulisan ternary operator
// hi bro akan dijalankan apabila gender bernilai true
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";
echo $hi . PHP_EOL;