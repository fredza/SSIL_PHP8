<?php
require __DIR__.'/vendor/autoload.php';

$number = 28;
//$number = $number *2;
$number *= 2;
$name = "Frédéric".PHP_EOL;
$message = 'Bonjour ';
$message .= $name;
//$user = $user ?? [];
$user = 'FRED';
$user ??= 'Frédéric';
dump($number, $message, $user);
printf('Le nom %s et le numéro est %s', $user, $number);

