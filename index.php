<?php
$name = 'Fred';
$double = "Elle a dit : \t \"Hello $name\"\n";
////////////////////////////////////////////////////////
$age = 25;
$result = 22.;
$hex = 0xfff;
$bin = 0b11101;
$population = 6_658_925_456;
$isAdmin = true;
$names = [
    'Domi',
    'Fred',
    'Laure',
    'Florian',
    52,
    true,
];
$associatif = [
    'name' => 'Fred',
    'age' => 52,
    'mail' => 'fredza@localhost',
    'valnul' => null,
];

//echo $double;
//echo $population;
echo $names[0];
echo $associatif['mail'];
echo $associatif['valnul'];
var_dump($associatif['valnul']);

