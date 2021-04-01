<?php
$name = ['hafidz', 'alfatih', 'ginting'];
foreach ($name as $nama) {
    echo "hallo $nama " . PHP_EOL;
}

$namaku = [
    'nama_depan' => 'hafidz',
    'nama_tengah' => 'alfatih',
    'nama_belakang' => 'ginting',
];
foreach ($namaku as $key => $value) {
    echo "$key : $value " . PHP_EOL;
}
