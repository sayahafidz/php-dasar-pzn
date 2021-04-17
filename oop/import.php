<?php
// mengimport data dalam class menggunakan use

require_once 'dataNamespace.php';
require_once 'helper.php';

//mengimport constant
use const helper\APK;

// mengimport class dalam namespace
use Data\satu\Conflict;

// mengimport function
use function helper\helpMe;

// kelebihannya, tidak perlu memanggil namespace berkali2
$konflik = new Conflict;

// mereferensi ke helper.php
helpMe();

echo APK;
