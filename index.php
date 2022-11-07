<?php function retname(){ if(isset($_GET['name'])){
    return htmlspecialchars($_GET['name']);
  }
  else{
    return 'guest';
  }}
  $title='document'  ; 
  require'index.view.php'
  ?>