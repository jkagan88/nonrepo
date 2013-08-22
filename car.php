<?php
<?php
 $car =new car();


  class car{
	  public $length = '16 feet';
	  public $weight ='2 tons';
	  public $doors = '4 doors';
	  public $engines = '1 cylinder engine';
  
 }
   public function go() {
	   echo 'go';
   }
   
   
   class ford extends car {
	   public $make ='ford';
   }	  
	  
