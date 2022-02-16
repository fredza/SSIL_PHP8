<?php
require __DIR__ . '/vendor/autoload.php';

$expr1 = false;
$expr2 = true;
$expr3 = false;

dump(($expr1 == $expr2) && ($expr2 || $expr3));

