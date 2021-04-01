<?php

$namadepan = 'hafid';
$namabelakang = 'ginting';

// anonimoues function
$anonFunc = function () use ($namadepan, $namabelakang): string {
    return "hallo $namadepan $namabelakang" . PHP_EOL;
};

// arrow function
$arrowFunction = fn() => "hallo $namadepan $namabelakang" . PHP_EOL;

echo $anonFunc();
echo $arrowFunction();
