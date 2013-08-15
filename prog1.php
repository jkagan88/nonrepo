<?php


  //calling-----turning on class----has to be outside the class
  $obj = new account(1000);
  $obj->credit(100);
  
 //create properties(variables inside class properties outside)functions inside class methods outside class

  class account {
  
    public $starting_balance;
    public $current_balance;   
    
    private function __construct($amount) {
      $this->starting_balance = $amount;
      $this->current_ballance = $amount; 
    }
    public function debit($amount) {
      $this->current _ballance = $this->current_balance - $amount;        
    }
    public function credit($amount) {
      $this->current _ballance = $this->current_balance + $amount;
    }
    public function __destruct() {
      echo 'Your starting balance was:' . $this->starting_balance . '<br>';
//      echo 'your endiing balance is:' . 
    }

  }



















?>
