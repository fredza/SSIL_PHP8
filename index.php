<?php
require __DIR__.'/vendor/autoload.php';

$add = 5 + 32.5 + 16;
$sub = $add - 12;
$multiply = $sub * 2;
$divide = $multiply / 3;
$rest = 21 % 2;
$rest2 = 10 % 2;
dd($add, $sub, $multiply, $divide, $rest, $rest2);
