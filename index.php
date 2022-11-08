<?php $title='php';
require 'functions.php';

$user=[
  '0'=>[
    'user_name'=>'seif'
  ],
  '1'=>[
    'user_name'=>'hazem'
  ]
];
 $tasks=[
   
   '0'=> [
      'task_title' => 'do first thing',
      'assigned_to'=>'1',
      'duedate'=>'24/12/2021',
      'description'=>'we must finish this task as soon as possible ',
      'completed'=>true,
   ],
   
  
  ];

  $a = (int)readline('Enter an integer: ');
  die(eligibleAge($a));
   
  require'index.view.php'
  ?>