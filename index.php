<?php
require __DIR__.'/vendor/autoload.php';

$nb1 = 2.0;
$nb2 = 2;
$nb3 = 3;

dump(
    $nb1 == $nb2,
    $nb1 === $nb2,
    $nb1 != $nb2,
    $nb1 !== $nb2,
    'supp et inf',
    $nb1 > $nb3,
    $nb1 >=$nb3,
    $nb1 < $nb3,
    $nb1 <= $nb3,
);
//----------------------------Les Booléens----------------------------
dump('Les Booléens',
(""),        // bool(false)
("0"),       // bool(false)
(1),         // bool(true)
(-2),        // bool(true)
("foo"),     // bool(true)
(2.3e5),     // bool(true)
(array(12)), // bool(true)
(array()),   // bool(false)
("false"),   // bool(true)
[] == false,
);