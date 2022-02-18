<?php
// L'instruction switch et l'expression match 1
require __DIR__ . '/vendor/autoload.php';

$role = 'fred';

//
//if ($role === 'visiteur') {
//    $message = 'Vous ne pouvez rien faire';
//} elseif ($role === 'admin') {
//    $message = 'Vous êtes l\'administrateur de cette app';
//} else {
//    $message = 'Vous êtes utilisateur';
//}
//switch ($role) {
//    case 'visiteur':
//        $message = 'Vous ne pouvez rien faire';
//        break;
//    case 'admin':
//        $message = 'Vous êtes l\'administrateur de cette app';
//        break;
//    default:
//        $message = 'Vous êtes membre';
//
//}
$message = match($role) {
    'visiteur', 'fred' => 'Vous ne pouvez rien faire',
    'admin' => 'Vous êtes l\'administrateur de cette app',
    default => 'Vous êtes membre',
};

echo $message . PHP_EOL;
