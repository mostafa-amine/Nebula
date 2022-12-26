<?php

use App\core\Application;

require_once __DIR__.'../vendor/autoload.php';


$app = new Application();

$app->router->get('/' , function() {
    return "This is Home Page";
});
$app->router->get('/projects' , function(){
    return "This is projects page";
});

$app->router->get('/users' , function() {
    return "This is user page";
});


$app->run();