<?php



$bankaccount = 100;



function expense($amount , $bankaccount){

    $bankaccount = $bankaccount - $amount;

    return $bankaccount;

}

$newbalance = expense(10, $bankaccount);

echo 'how much money do I start with this month' . $bankaccount;

echo 'What is my current balance?' . $newbalance;

?>
