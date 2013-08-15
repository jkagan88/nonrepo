<?php

  $obj= new debitcreditform();

  $obj->displayform();i

  //$transaction =new transaction();
 
  $transaction = new transaction();

  $transaction->type =debit;
  $transaction->amount= 100;
  $transaction->source= 'walmart';

  $transaction[] = $transaction;

  class transactions {
    puplic $transactions = array;
    public function addTransaction($transaction) {
      $this->transactions[] = $transaction;
    }
  }
  
  print_r($transactions);

  class transaction() {
    public $type;
    public $amount;
    public $source;
  } 
 
  class debitcreditform {
    public function displayform()
      $form = '<br>
            <FORM action="form.php" method="post">
              <fieldset>
                <LABEL for="amount">Amount: </LABEL>
                  <INPUT type="text" name="amount" id="lastname"><BR>
                  <INPUT type="radio" name="trans_type" value="debt"> Debit<BR>
                  <INPUT type="radio" name="trans_type" value="credit"> Credit<BR>
                <INPUT type="submit" value="Send"> <INPUT type="reset">
              </fieldset>
            </FORM>';
  }
