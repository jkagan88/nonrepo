<?php

  class Address{
  //class can have any number of properties
    public $streetAddress_1;
    public $townName;
    public $stateName;
    public $postalCode;
    public $countryName;
    
    protected $address_id;
    protected $time_created;
    protected $time_updated;
  
  //Method to display address in HTMLi
    function display() {
      $output = '';
      $output .= $this->streetAddress_1;
      if ($this .= (streetAddress_2){
        $output .= '<br>' . $this->streetaddress_2};
      $output .='<br>';
      $output .=$this->townName . ',' . $this->statename;
      $output .= '' . $this->postalCode;
      $output .= '<br>';
      $output .= $this-> countryName;
      
      return $output;
    }
  }  
      $address = new Address;
      $address ->streetAdress_1 ='555 Fake Street';
      $address ->townName = 'Townsville';
      $address ->stateName = 'Hicks';
      $address ->countryName = 'USA'
      $address ->postalCode = '11111';
      
      echo '<h2>'Testing protected access.</h2>';
      echo "address ID: {$address->_address_id};
      
