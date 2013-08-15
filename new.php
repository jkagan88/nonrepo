<?php

  $name1 = wilLiaM;
  $name2 = JosEPH;
  $name3 = fRaNk;
  /////////
  echo $name1 . $name2 . $name3;
  fix_names($name1 , $name2 , $name3);
  echo $name1 . $name2 . $name3;

  function fix_names(&$name1, &$name2, &$name3){
    $name1 = ucfirst(strtolower($name1));
    $name2 = ucfirst(strtolower($name2));
    $name3 = ucfirst(strtolower($name3));
    return array($name1, $name2, $name3);

?>

~                                                                                                                                        
~                                                                                                                                        
~                                                                                                                                        
~                                                     
