<?php

/**
 * undocumented class
 */
 
class Route 
{
    public $routes;
    public function __construct()
    {
        $this->routes=[
            '/'=>'/Controllers/index.php',
            '/about'=>'/Controllers/about.php',
            '/contact'=>'/Controllers/contact.php',
     ];
     
      
    
    }

    public function loaduri($controller){
       
            require $this->routes[$controller];
           // echo trim($controller,'/').'      ';
           
        

    }


    
}


?>