<?php
require 'vendor/autoload.php';

use \Router\Router;
use \Controllers\HomeController;
use \Controllers\AboutController;
use \Controllers\ContactController;




$router = new Router();

$router->addRoute('/home', HomeController::class);
$router->addRoute('/about', AboutController::class);
$router->addRoute('/contact', ContactController::class);

$url = $_SERVER['REQUEST_URI'];



$router->dispatch($url);
