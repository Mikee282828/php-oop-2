<?php
include __DIR__ . "/data.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex">
        <?php
        foreach ($prodotti as $prodotto) {
            echo
            '<div class="card">
            
                <div class="productName">Nome: '
                    .
                    $prodotto->name
                    .
                '</div>
            
                <div class="productAnimalCategory">Animale: '
                    .
                    $prodotto->category?->name
                    .
                '</div>
            
                <div class="productCategory">Categoria: '
                    .
                    get_class($prodotto)
                    .
                '</div>

                <div class="price">Prezzo: '
                    .
                    number_format($prodotto->getPrice(),2,",","")
                    .
                '</div>';

            switch(get_class($prodotto)){
                case 'Cuccia':
                    if($prodotto->dimensioni!=null){
                        echo '<div>Dimensioni: '. $prodotto->dimensioni . '</div></div>';
                    }else{
                        echo '</div>';
                    }
                    break;
                case 'Cibo':
                    if($prodotto->calorie!=null){
                        echo '<div>Calorie: '. $prodotto->calorie . '</div></div>';
                    }else{
                        echo '</div>';
                    }
                    break;
                case 'Gioco':
                    if($prodotto->tipo!=null){
                        echo '<div>Tipo: '. $prodotto->tipo . '</div></div>';
                    }else{
                        echo '</div>';
                    }
                    break;
            }
        }
        ?>
    </div>
</body>

</html>