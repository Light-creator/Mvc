<?php  
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'vendor/autoload.php';

use Services\Router;
use Services\App;

use Controllers\HomeController;

Router::get('/', 'HomeController@index');

App::run();

