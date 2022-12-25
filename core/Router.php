<?php
namespace App\core;


class Router
{
    protected array $routes = [];
    public function get($uri, callable|array|string $callback)
    {
        $this->routes['get'][$uri] = $callback;
    }

    public function resolve()
    {
        
    }
}