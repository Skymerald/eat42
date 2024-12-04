<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Shop</title>
</head>
<body class="main-center-container">
    <?php include_once("list_of_products.php"); include_once("product.php"); ?>
    <?php 
    if(is_array($productsList) && !empty($productsList)){
        foreach($productsList as $product){
            $product->display();
        }
    }
    ?>
    <footer class="footer-menu" >
        <?php include_once("navbar.html"); ?>
    </footer>
</body>
</html>