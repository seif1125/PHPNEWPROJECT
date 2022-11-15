<?php
require('Models/Task.php');
require('SQL/QueryBuilder.php');


 class TaskController{
   
   public function __construct()
   {
    
    
    
   }
   
    public function get()
    {   
         return fetchAllToClass('tasks',Task);
       
    }

};

?>