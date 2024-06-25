<?php
class Cibo extends Prodotto{
    public function __construct(public $name, protected $price, public $discount, public Categoria $category,public $calorie = null)
    {
    }
}