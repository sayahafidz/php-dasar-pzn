<?php
require_once "Person.php";

$hafidz = new Person('hafidz', null);
// mengakses variable this yang mengakses objek saat ini
$hafidz->name = 'hafidz';
// mengakses fungsi di dalam class menggunakan objek
$hafidz->sayhallo(null);

$jaka = new Person('jaka', null);
// mengakses variable this yang mengakses objek saat ini
$jaka->name = 'jaka';
// mengakses fungsi di dalam class menggunakan objek
$jaka->sayhallo('sembung');

$jaka->info();
$hafidz->info();