<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Slim\Slim();

$app->get('/users', function() {

    echo "ASDF";
    $users = User::all();
    die($users);
    header("Content-Type: application/json");
    echo json_encode($users);
    exit;
});

$app->get('/', function() {
	// $user = new User;
    $users = User::all();
    die($users);

    $user->username = "Test User";
    $user->save();

    echo "Hello, $user->username!";
});


$app->get('/hi/', function() {
    $user = new User;
    $user->username = "Thiiiiiasdf; User";
    // $user->save();

    echo "Hello, $user->username!";
});

$app->run();
