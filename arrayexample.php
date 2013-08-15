<?php
 
  //create associative array
  $record =array('first name' => 'joe','last name' => 'kahan');
  print_r ($record);

  //initialize blank array
  $records =array();
  
  //two brackets are a symbal for array push
  $records[] = $record;
  $record['first name'] ='noam';
  $record['last name'] = 'lustiger';
  $records[] = $record;
  $record['first name']='yehuda';
  $record['last name']='kafra';
  $records[] = $record;

  print_r ($records);

                             

  




?>
