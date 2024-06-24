<?php
include __DIR__ . '/models/Prodotto.php';
include __DIR__ . '/models/Cibo.php';
include __DIR__ . '/models/Gioco.php';
include __DIR__ . '/models/Cuccia.php';

// $pallinaGatto = new Gioco("pallina","gatto",8.99, 0.3);
// $pallinaCane = new Gioco("pallina","cane",8.99, 0.3);

// $cucciaGatto = new Cuccia("cuccia","gatto",19.99, 0.2);
// $cucciaCane = new Cuccia("cuccia","cane",19.99, 0.2);

// $ciboGatto = new Cibo("cibo","gatto",10.99, 0.1);
// $ciboCane = new Cibo("cibo","cane",10.99, 0.1);

$prodotti = [
    new Gioco("Pallina","gatto",8.99, 0.3),
    new Gioco("Pallina","cane",8.99, 0.3),
    new Cuccia("Cuccia","gatto",19.99, 0.2),
    new Cuccia("Cuccia","cane",19.99, 0.2),
    new Cibo("Cibo","gatto",10.99, 0.1),
    new Cibo("Cibo","cane",10.99, 0.1)
];
