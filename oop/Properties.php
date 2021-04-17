<?php
require_once 'Person.php';

$orang = new Person('orang', null); //membuat object

// manipulasi properties.
$orang->name = 'hafidz';
$orang->address = 'perbaungan';
$orang->country = 'indonesia';

var_dump($orang);

// menampilkan data object
echo "Name : $orang->name " . PHP_EOL;
echo "address : $orang->address " . PHP_EOL;
echo "country : $orang->country " . PHP_EOL;
