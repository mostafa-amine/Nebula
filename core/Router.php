<?php
namespace App\core;


class Router
{
    // declare $request variable of type Request class
    public Request $request;
    protected array $routes = [];

    // Inject Request class
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($uri, callable|array|string $callback)
    {
        $this->routes['get'][$uri] = $callback;
    }

    public function post($uri , callable|array|string $callback)
    {
        $this->routes['post'][$uri] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false)
        {
            echo "404 Not Found!";
            exit;
        }

        echo call_user_func($callback);


        // echo "<pre>";
        // var_dump($callback);
        // echo "</pre>";
    }
}