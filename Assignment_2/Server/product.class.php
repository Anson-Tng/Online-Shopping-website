<?php

class product{

    public function __construct(){
        $this->name = '';
        $this->price = '';
        $this->amount = '';
    }

    function setName($name){$this->name = $name;}
    function getName(){return $this->name;}

    function setPrice($price){$this->price = $price;}
    function getPrice(){return $this->price;}

    function setAmount($amount){$this->amount = $amount;}
    function addAmount($amount){$this->amount +=$amount;}
    function getAmount(){return $this->amount;}

}



?>