<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $app->config->get('db.driver'),
    'host' => $app->config->get('db.host'),
    'database' => $app->config->get('db.name'),
    'user' => $app->config->get('db.username'),
    'password' => $app->config->get('db.password'),
    'charset' => $app->config->get('db.charset'),
    'collocation' => $app->config->get('db.collocation'),
    'prefix' => $app->config->get('db.prefix'),
]);

$capsule->bootEloquent();