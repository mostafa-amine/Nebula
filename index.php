<?php

use App\core\Application;

require_once __DIR__.'/vendor/autoload.php';


$app = new Application();

$app->router->get('/app' , function(){
    
});

$app->run();