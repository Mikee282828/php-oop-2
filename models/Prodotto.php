<?php 
class Prodotto{
    public function __construct(public $name,public $category,protected $price,public $discount){}

    public function getPrice(){
        return $this->price - $this->price*$this->discount;
    }

    public function setPrice($price){
        $this->price = $price;
    }
}
