<?php

/**
 * undocumented class
 */
$routesArray= require('routes.php');
class Route 
{
    public $routes ;
    public function __construct()
    {
        $this->routes=$routesArray;
    }

    public function loaduri($controller){
        if(key_exists($controller,$routes)){
            
            return $routes[$controller];
        }

    }


    
}


?>