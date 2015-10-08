<?php
use Slim\Slim; // namespace/class
use Noodlehaus\Config;  //hassankhan
use MyProject\User\User;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

/* Turn off server's headers Cache-Control, Pragma, Expires denied browsers cashing */
session_cache_limiter(false);
session_start();

/**Set on errors for developer mode**/
ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));
require INC_ROOT."/vendor/autoload.php";

$app = new Slim([
    'mode' => file_get_contents(INC_ROOT . '/mode.php'),
    'view' => new Twig,
    'templates.path' => INC_ROOT . '/app/views'
]);
//$app->config('mode');
$app->configureMode($app->config('mode'), function() use ($app){
    $app->config = Config::load(INC_ROOT."/app/config/{$app->mode}.php");
});

//var_dump($app->config->get('db.driver'));

 //Test sample
//$app->get('/test/:name', function($name){
  //  echo "Hello {$name}";
//});


require 'database.php';
require 'routes.php';

$app->container->set('user', function(){
    return new User;
});

//$app->get('/', function() use ($app){
//    $app->render('home.php');
//});

$view = $app->view();
$view->parserOptions = [
    'debug' => $app->config->get('twig.debug')
];
$view->parserExtensions = [
    new TwigExtension() // for views
];