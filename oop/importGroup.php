<?php
// mengimport data dalam class menggunakan use

require_once 'dataNamespace.php';
require_once 'helper.php';

// mengimport class dalam namespace
use Data\satu\{Conflict as konflik, dummy,sample};

$haha = new konflik();
$hehe = new dummy();
$hoho = new sample();
