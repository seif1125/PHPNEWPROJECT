<?php function retname(){ if(isset($_GET['name'])){
    return htmlspecialchars($_GET['name']);
  }
  else{
    return 'guest';
  }}
  $title='document'  ;
  $names=['Seif','Mostafa','Ahmed'];
  $cars=['sunny','xv'];
  $animals=['rat','cat','dog'];
   $carsHTML='';
   foreach ($cars as $car) {
   echo  '<li>' . $car . '</li>';
      
   }
   
  require'index.view.php'
  ?>