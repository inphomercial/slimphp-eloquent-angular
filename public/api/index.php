<?php

require __DIR__.'/../../vendor/autoload.php';

$app = new Slim\Slim();

$app->get('/users', 'getUsers');
$app->get('/', 'root');
$app->get('/hi/:username', 'username');

$app->run();


function getUsers() {

    $users = User::all();

    header("Content-Type: application/json");
    echo json_encode($users);
    exit;
};

function root() {

    $user = new User;
    $user->username = "Test User";
    $user->save();

    echo "Hello, $user->username!";
};

function username($username) {
    $user = new User;
    $user->username = $username;
    $user->save();

    echo "Hello, $user->username!";
};

