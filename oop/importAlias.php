<?php
// mengimport data dalam class menggunakan use
require_once 'dataNamespace.php';
require_once 'helper.php';

//mengimport constant
use const helper\APK as app;

// mengimport class dalam namespace
use Data\dua\Conflict as konflik2;
use Data\satu\Conflict as konflik1;

// mengimport function
use function helper\helpMe as help;

// kelebihannya, tidak perlu memanggil namespace berkali2
$konflik1 = new konflik1();
$konflik2 = new konflik2();

// mereferensi ke helper.php
help();

echo app;
