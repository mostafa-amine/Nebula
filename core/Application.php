<?php

namespace App\core;



class Application 
{
    // Declare $router variable of type Router class 
    public Router $router;
    // Declare $request variable of type Request class 
    public Request $request;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}