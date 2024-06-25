<?php
class Prodotto
{
    public function __construct(public $name, protected $price, public $discount, public Categoria $category)
    {
    }

    public function getPrice()
    {
        return $this->price - $this->price * $this->discount;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
