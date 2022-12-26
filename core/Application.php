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
        $this->request = new Request();
        // send request object as a parameter to the Router constructor
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}