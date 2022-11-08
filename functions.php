<?php
function retname(){ if(isset($_GET['name'])){
    return htmlspecialchars($_GET['name']);
  }
  else{
    return 'guest';
  }
};

function eligibleAge(int $age)
{
    if($age>18){
        echo 'not eligible';
        
    }
    else{
        echo 'eligible';
    
    }
}


?>