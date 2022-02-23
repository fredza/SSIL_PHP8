<?php declare(strict_types = 1);
// Les fonctions arguments infini spread operator '...'
require __DIR__ . '/vendor/autoload.php';

function hello(string ...$names): string
{
    $names = implode(', ', $names);
    return "Hello $names".PHP_EOL;
}

$hey = hello('Fred', 'Domi', 'Florian','Laure');

echo $hey;