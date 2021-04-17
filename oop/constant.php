<?php
require_once 'Person.php';

// constant adalah variable yang tidak bisa dimanipulasi/diuabah setelah di deklarasikan
// php versi dibawah 7
define("APPLICATION", "belajar php oop bersama pak eko");

// deklarasi constant di php versi diatas 7
const citacita = 'menjadi orang kaya';

echo APPLICATION . PHP_EOL;
echo citacita . PHP_EOL;

// cara mengakses constant
echo Person::AUTHOR . PHP_EOL;