<?php 
include __DIR__ . "/data.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo number_format($ciboGatto->getPrice(),2,",","");
    ?>
</body>
</html>