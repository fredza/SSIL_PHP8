<?php declare(strict_types=1);
// Les fonctions anonymes et en flèches
require __DIR__ . '/vendor/autoload.php';

$numbers = [2, 4, 6, 10];


//$square = array_map(function (int|float $nb): int|float {
//    return $nb ** 2;
//
//}, $numbers);

$square = array_map(
//    fn (int|float $nb): int|float => $nb ** 2,
    // en plus simple
    fn ($nb) => $nb ** 2,

    $numbers
);


dd($square);