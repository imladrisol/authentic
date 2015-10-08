<?php
$app->get('/', function() use ($app){ // path to home page
    $app->render('home.php');
})->name('home');