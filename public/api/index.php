<?php

require __DIR__.'/../../vendor/autoload.php';

$app = new Slim\Slim();

$app->get('/users', function() {

    $users = User::all();

    header("Content-Type: application/json");
    echo json_encode($users);
    exit;
});

$app->get('/', function() {

    $user = new User;
    $user->username = "Test User";
    $user->save();

    echo "Hello, $user->username!";
});


$app->get('/hi/:username', function($username) {
    $user = new User;
    $user->username = $username;
    $user->save();

    echo "Hello, $user->username!";
});

$app->run();
