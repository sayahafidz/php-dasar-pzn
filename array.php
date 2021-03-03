<?php
// membuat array
$values = array(1, 2, 'hafidz', 4, 5.5);
var_dump($values);
$nama = ["hafidz", "alfatih", "ginting"];
var_dump($nama);

// mengakses array
var_dump($nama[0]);

// mengganti array
var_dump($nama[2] = "semitupang");
var_dump($nama);

// menghapus array
unset($nama[1]);
var_dump($nama);

// menambah array
$nama[] = "ganteng";
var_dump($nama);

// menghitung array
var_dump(count($nama));

// array sebagai map di php
$hafidz = array(
    'id' => 'hafidz',
    'name' => 'hafidz alfatih',
    'age' => 19,
    // nested arrray
    'address' => array(
        'city' => 'medan',
        'country' => 'indonesia'
    )
);
var_dump($hafidz);
var_dump($hafidz['name']);
// mengakses nested array
var_dump($hafidz['address']['country']);

$hafidz = [
    'id' => 'hafidz',
    'name' => 'hafidz alfatih',
    'age' => 19
];
var_dump($hafidz);
var_dump($hafidz["name"]);
