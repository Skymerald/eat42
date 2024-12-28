<?php
session_start();
$bdd = new mysqli(
    'localhost',
    'root',
    'root',
    'eat42'
);
$requete = $bdd->prepare('SELECT * FROM produits');
$requete->execute();
$bddProducts = $requete->get_result();
$bddProductsList;
include_once("product.php");
if ($bddProducts->num_rows > 0) { 
    while ($row = $bddProducts->fetch_assoc()) { 
        $bddProductsList[] = new product($row['p_name'], $row['p_price'], $row['p_description'], $row['p_photo'], $row['p_id']);
    } 
}

$requete->close();
$bdd->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Shop</title>
</head>
<body class="main-products-container">
    <?php 
    if(is_array($bddProductsList) && !empty($bddProductsList)){
        foreach($bddProductsList as $product){
            $product->display();
        }
    }
    ?>
    <script src="cart.js"></script>
    <footer class="footer-menu" >
        <?php include_once("navbar.html"); ?>
    </footer>
</body>
</html>