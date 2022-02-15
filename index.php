<?php
require __DIR__.'/vendor/autoload.php';

$people = ['name' => 'Fred'];
$users = $members ?? $people ?? [];
dump($users);
