<?php

  $ident =array('first name' =>'joe'  ,
  'last name' =>'kahan'  ,
  'residence' =>'toronto' ,
  'nationality'=>'canada' );
  print_r($ident) ;
  
  $idents =array();

  $idents[] = $ident;
  $ident['first name']= 'yonadav';
  $ident['last name']='tapuchi';
  $idents[]=$ident;
  $ident['first name']='asher';
  $ident['last name']='kahan';
  $idents[]= $ident;

  print_r($idents,);
