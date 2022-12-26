<?php
namespace App\core;


class Router
{
    // declare $request variable of type Request class
    public Request $request;
    protected array $routes = [];
    public function get($uri, callable|array|string $callback)
    {
        $this->routes['get'][$uri] = $callback;
    }

    public function resolve()
    {
        
    }
}