
<?php 
$title='document'  ; 
?>
<html lang="en">
  
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <style>
      header {
        background-color: #e3e3e3;
        color: #000;
      }
    </style>
  </head>
  <body>
  <?php function retname(){ if(isset($_GET['name'])){
    return htmlspecialchars($_GET['name']);
  }
  else{
    return 'guest';
  }}
  ?>
    <header>
      <h1><?php echo 'hello  ', retname(); ?></h1>
    </header>
  </body>
</html>
