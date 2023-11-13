<?php
use Dotenv\Dotenv;
use framework\App;
use framework\database\connection;
use framework\database\Database;
use framework\Route;

$routes = require '../routes.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require '../config.php');

App::bind('database', new Database(
    connection::make(App::get('config')['database'])
));

App::bind('router', (new Route())->define($routes));
