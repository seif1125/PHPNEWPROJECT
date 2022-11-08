

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

    <header>
      <h1><?php echo 'hello  ', retname(); ?></h1>
      </header>
 
      <ul> 
         
        <?php foreach($tasks as $key=>$value) :?>
          
         <li> <strong> <?= $value['task_title']?></strong></li>
         <li> <strong> <?= $value['duedate']?></strong></li>
         <li> <strong> <?= $value['description']?></strong></li>
         <li> <strong> <?= array_values($user[$value['assigned_to']])[0]?></strong></li>
         <li style='<?= $value['completed']?'background-color:#00ff00':'background-color:#ff0000'?>'> <strong><?= $value['completed']?'completed':'not-completed'?> </strong></li>

          <?php endforeach ?>
      </ul>
  
    
  </body>
</html>
