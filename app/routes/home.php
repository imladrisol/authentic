<?php
$app->get('/', function() use ($app){ // path to home page
    $app->render('home.php');
})->name('home');
$app->get('/flash', function() use ($app){
    $app->flash('global', 'You have registered!'); // for messages.php template - flash.global
    $app->response->redirect($app->urlFor('home'));//redirect to home page
});