<?php

$nama = 'hafidz'; //global scope

function sayhallo()
{
    global $nama; // jadi global keyword
    echo $nama . PHP_EOL; //local scope

    var_dump($GLOBALS['nama']) . PHP_EOL;
}

sayhallo();
