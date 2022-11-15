
<?php 
$pdo;
   
    function  connectToDB(){
      
      if($pdo !=null){
         return $pdo;
      }
      try {
           $pdo=new PDO('mysql:host=sql8.freemysqlhosting.net;dbname=sql8554962;charset=UTF8','sql8554962','jHtQIIsLTp'); 
         return $pdo;
       } catch (\Throwable $th) {
          echo 'error';
          die();
       }
       
   }
  
           
      
       
   

?>