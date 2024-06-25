<?php
class Cuccia extends Prodotto{
    public function __construct(public $name, protected $price, public $discount, public Categoria $category,public $dimensioni = null)
    {
    }
}