<?php  
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'vendor/autoload.php';

use Services\Router;
use Services\App;
use Db\Models\User;

Router::get('/', 'HomeController@index');

Router::get('/auth/register', 'AuthController@get_register');
Router::post('/auth/register', 'AuthController@post_register', true);

Router::get('/auth/index', 'AuthController@get_auth');
Router::post('/auth/index', 'AuthController@post_auth', true);

App::run();

