<?php

/**
 * undocumented class
 */
 
class Route 
{
    public $routes;
    public function __construct()
    {
        require 'routes.php';
        $this->routes=$routesArray;
     
      
    
    }

    public function loaduri($controller){
           $x=strpos($controller, '?');
           if ($x>0) {
               require $this->routes[substr($controller,0, $x)];
           }
           else{
               echo 'no ?';
            require $this->routes[$controller];
           }
         
           
           
           
        

    }
   

    
}


?>