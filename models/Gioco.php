<?php
class Gioco extends Prodotto{
    public function __construct(public $name, protected $price, public $discount, public Categoria $category,public $tipo = null)
    {
    }
}