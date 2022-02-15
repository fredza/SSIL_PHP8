<?php
require __DIR__.'/vendor/autoload.php';

$age = 20;

//dump($age > 18 && $age != 25);
$size = 180;
dump($age >= 18 || $size >= 160);
dump(!($age >= 18 || $size >= 160));
