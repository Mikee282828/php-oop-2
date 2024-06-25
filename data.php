<?php
include __DIR__ . '/models/Prodotto.php';
include __DIR__ . '/models/Cibo.php';
include __DIR__ . '/models/Gioco.php';
include __DIR__ . '/models/Cuccia.php';
include __DIR__ . '/models/Categoria.php';

$dog = new Categoria("cane");
$cat = new Categoria("gatto");

$prodotti = [
    new Gioco("Pallina", 8.99, 0.3, $dog),
    new Gioco("Pallina", 8.99, 0.3, $cat,"circolari"),
    new Cuccia("Cuccia", 19.99, 0.2, $dog,"21x21x21cm"),
    new Cuccia("Cuccia", 19.99, 0.2, $cat),
    new Cibo("Cibo", 10.99, 0.1, $dog,"100kcal/100g"),
    new Cibo("Cibo", 10.99, 0.1, $cat,"50kcal/100g")
];
