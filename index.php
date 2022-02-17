<?php
// Video foreach (partie 2) 06:54 / 16.05
require __DIR__ . '/vendor/autoload.php';
$others = [
    [
        'title' => 'From other array'
    ],
];

$posts = [
    [
        'title' => 'Hello World'
    ],
    ... $others,    // 2ème méthode
    [
        'title' => 'Hi everybody!'
    ],
];
$user = [
    'Frederic',
    'fredza801@localhost.com',
    'default',
];
[$name, $mail, $role] = $user;
dump($name, $mail, $role);


//$posts2 = array_merge($posts, $others); // 1ere méthode

foreach ($posts as $key => $post) {
    echo "$key: {$post['title']}".PHP_EOL;
}


