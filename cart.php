<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a1bb3c16d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Cart</title>
</head>
<body class="main-container">
    <div class="main-cart-container">
        <button onclick="deleteCart();" class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
        <div class="cart-container">
        </div>
        <div class="checkout-container">
            <div class="checkout-resume-container">
            
            </div>
            <button class="checkout-button">BUY</button>
        </div>
    </div>
    <footer class="footer-menu">
        <?php include_once("navbar.html"); ?>
    </footer>
    <script src="cart.js"></script>
</body>
</html>