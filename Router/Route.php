<?php

/**
 * undocumented class
 */
 require('routes.php');
class Route 
{
    public $routes=[
        
            '/'=>'/Controllers/index.php',
            '/about'=>'Controllers/about.php',
            '/contact'=>'/Controllers/contact.php',
     
    ];
    public function __construct()
    {
      #echo var_dump($this->routes);
      
    
    }

    public function loaduri($controller){
       
            require $this->routes[$controller];
           // echo trim($controller,'/').'      ';
            echo 'fg';
        

    }


    
}


?>