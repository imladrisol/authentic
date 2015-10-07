<?php
use Slim\Slim; // namespace/class

/* Turn off server's headers Cache-Control, Pragma, Expires denied browsers cashing */
session_cache_limiter(false);
session_start();

/**Set on errors for developer mode**/
ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));
require INC_ROOT."/vendor/autoload.php";

$app = new Slim();
/*
 //Test sample
$app->get('/test/:name', function($name){
    echo "Hello {$name}";
});
*/