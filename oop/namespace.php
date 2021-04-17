<?php
require_once 'dataNamespace.php';
require_once 'helper.php';

// cara memanggil class yang berada di dalam namespace;
$namesp = new \Data\satu\Conflict;

$names = new \Data\dua\Conflict;

// cara mengakses constant yang berada didalam namespace;
echo helper\APK . PHP_EOL;

// cara mengakses function yang ada didalam namespace
helper\helpMe();