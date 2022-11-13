<?php
#require 'Connector/PDO.php';
require 'Database/DBconnection.php';


     function fetchAllToClass($table,$class){
         $ins= connectToDB();
         $query= $ins ->prepare("select * from tasks");
         
           $F=$query->execute();
           $F=$query->fetchAll(PDO::FETCH_CLASS,$class);
         return $F;
     }




?>