<?php
require __DIR__ . '/vendor/autoload.php';

$posts = [
    [
        'title' => 'Hello World'
    ],
    [
        'title' => 'Hi everybody!'
    ],
];

foreach ($posts as $key => $post) {
    echo "$key: {$post['title']}".PHP_EOL;

}

