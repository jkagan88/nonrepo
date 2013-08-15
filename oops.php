<?php

    //$obj =new messagePrint ('My Message');
  
    $obj =new addItUp(4,5);
    $obj =new addItUp(5,8);
  
  //class messagePrint{
    //function __construct($message){
      //echo $message;
      //echo 'some other message';
    //}
  //}
  
  class addItUp {
  
    function __construct($a,$b){
    $c = $a +$b ;
 
      echo $a, '+', $b ,'=', $c; .'<br>'; 
    }
  } 







?>
