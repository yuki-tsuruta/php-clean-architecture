<?php

require_once __DIR__ . '/../vendor/autoload.php';

use UserContext\Presentation\Controllers\UserController;
use UserContext\UseCases\CreateUser;
use Infrastructure\Repositories\UserRepository;

// Create the necessary objects
$userRepository = new UserRepository(/* ... */);
$createUser = new CreateUser($userRepository);
$userController = new UserController($createUser);

// Get the path from the URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
if ($path === '/user/create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->create($_POST['name'], $_POST['email']);
} else {
    // Handle other routes or show a 404 page
}
