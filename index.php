<?php
// Video while partie 2
require __DIR__ . '/vendor/autoload.php';

$fp = fopen('hello.txt', 'r');

if (!$fp) {
    echo "Sorry, unable to open the file".PHP_EOL;
} else {
    // Version do-while qui dans ce cas fonctionne
//    $char = '';
    do {
        echo $char ?? 'Contenu du fichier :'.PHP_EOL;
    } while (($char = fgets($fp)) !== false);
//    while (($char = fgets($fp)) !== false) { // fgets() à la place de fgetc() unicode ? 1 caractère par ligne
    }
fclose($fp);
/*****************************************************
 * todo Steven pourquoi il n'y a pas de PHP_EOL en dernier character parcouru par la boucle ?
 */




