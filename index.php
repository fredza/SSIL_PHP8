<?php
require __DIR__ . '/vendor/autoload.php';

$posts = [
    [],
    [],
];

if (!$posts) {
    echo 'Il n\'y a pas de résultats'.PHP_EOL;
} else {
    echo 'Il ya des résultats'.PHP_EOL;
}

if (count($posts) >= 2) {
    // Instructions si vraies
    printf('Il y a %s articles%s', count($posts), PHP_EOL);
} elseif (count($posts) === 1) {
    echo 'Il y a 1 article' . PHP_EOL;

} else {
    echo 'Il n\'y a aucun article'.PHP_EOL;
}

