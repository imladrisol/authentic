<?php
use Slim\Slim; // namespace/class
use Noodlehaus\Config;  //hassankhan
use MyProject\User\User;

/* Turn off server's headers Cache-Control, Pragma, Expires denied browsers cashing */
session_cache_limiter(false);
session_start();

/**Set on errors for developer mode**/
ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));
require INC_ROOT."/vendor/autoload.php";

$app = new Slim([
    'mode' => file_get_contents(INC_ROOT . '/mode.php')
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

$app->container->set('user', function(){
    return new User;
});

var_dump($app->user);
