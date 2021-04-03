<?php

$nama = 'hafidz';

$namalain = &$nama; // reference;
$namalain = 'sampah';
echo $namalain . PHP_EOL;

// pass value by reference;
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

// return value by reference;
function &getvalue()
{
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;
