<?php
require __DIR__.'/vendor/autoload.php';

$number = 12;
$number1 = $number++;
$number2 = $number--;
$number3 = ++$number;
$number4 = --$number;
dump($number, $number1, $number2, $number3, $number4);
dump($number++); // Ne donne plus 13 (avec une post-incrémentation directe ça fonctionne) attention à la priorité des opérateurs post > pré.
// directement : $number = 12;$number++;dump($number);

// Dans les boucles, il faudra faire la distinction entre post et pré incrémentation.
