<?php

function hallo(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "hallo $finalName" . PHP_EOL;
}
hallo('muhammad hafidz alfatih ginting', 'strtoupper');
hallo('muhammad hafidz alfatih ginting', 'strtolower');
