<?php

namespace App\core;

class Request 
{
    

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $queryPosition = strpos($path , '?');
        
        // If the query not found then the path is returned
        if($queryPosition === false)
        {
            return $path;
        }
        
        // return the path without the query
        return substr($path , 0 , $queryPosition);
    }

    public function getMethod()
    {
        // get the request method
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}