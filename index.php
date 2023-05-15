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
  
$router->map('GET', '/register', function(){
    require_once (__DIR__ . "/src/View/register.php");
}, 'registerForm');

$router->map('POST', '/register', function(){
    require_once (__DIR__ . "/src/View/register.php");
    $AuthController = new AuthController();
    $AuthController->authController($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['conf_pass']);})
   
    $router->map( 'GET', '/login', function() {
        require_once (__DIR__ . "/src/View/login.php");
    }, 'loginForm');

    $router->map('POST', '/login', function(){
        require_once (__DIR__ . "/src/View/login.php");
        $AuthController = new AuthController();
        $AuthController->connController($_POST['email'], $_POST['password']);
    }, 'loginInsert');

    $router->map('GET', '/users/[i:id]', function($id) {
        $UserController = new ControllerUser();
        $UserController->getOneUser($id);
    }, 'usersInfo');

    $router->map( 'GET', '/books/write', function() {
        require_once (__DIR__ . "/src/View/book.php");
    }, 'bookForm');

    $router->map('POST', '/books/write', function(){
        require_once (__DIR__ . "/src/View/book.php");
        $BookController = new BookController();
        $UserController = new ControllerUser();
        $user = $UserController->getOneUserById($_SESSION['user']['id']);
        $BookController->bookController($_POST['title'], $_POST['content'], $user['id']);
    }, 'bookInsert');
    
    $match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>