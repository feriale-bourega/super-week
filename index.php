<?php
require 'AltoRouter.php';
session_start();
$router = new AltoRouter();

$router->setBasePath('/super-week');

$router->map( 'GET', '/', function(){
    require_once (__DIR__ . '/src/View/home.php');
} , 'home');

$router->map( 'GET', '/users', function(){
    $ControllerUser = new ControllerUser();
    $ControllerUser->getAllUser();
} , 'users');
  


$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>