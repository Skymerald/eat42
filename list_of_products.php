<?php 
include_once('product.php');
$bowlBurger = array("name"=>"Bowl Burger", "price"=>"70€", "description"=>"Vous vous faites enflé certes mais c'est bon; en plus il y a du steak de la tomate et de la salade.", "photo"=>"product_img/bowl-burger.png", "id"=>0);
$tacosSavoyard = array("name"=>"Tacos Savoyard", "price"=>"225€", "description"=>"Une arnaque enore plus grosse mais aussi plus gourmande, accompagnée de ses frites surgelées, de petites galettes de pomme de terres et de bacon périmé.", "photo"=>"product_img/tacos-savoyard.png", "id"=>1);
$bowlCode42 = array("name"=>"Bowl Code42", "price"=>"305€", "description"=>"Qualtitatif, fait maison par code 42, expliquant donc le prix car ils n'ont pas le temps et bien sur accompagné d'oignions frit, de celeri, de poulet mariné, de frite, 
de cornichons et de sauce algérienne, avec un assaisonnement sauce cancer. Cheh. Fallait pas gacher notre temps.", "photo"=>"product_img/bowl-code42.png", "id"=>2);
$saladeCesar = array("name"=>"Salade César", "price"=>"185€", "description"=>"Nettement plus pire que le bowl code42, mais bien meilleur que le bowl burger. Avec celui ci vous avez une chance de pas mourir dans la journée. 
Mais attendez vous à mourir dans la semaine. Et ouais, fallait passez à la caisse, même notre pire ennemi l'a fait, il avait trop peur.", "photo"=>"product_img/salade-cesar.png", "id"=>3);
$tacosCaliente = array("name" => "Tacos Caliente", "price" => "70€", "description" => "Va faire explosé votre colésthérol comme à troué votre porte feuille. Sale pauvre. 
Cela va aussi exploser vos toilettes grâce au piment jalapeno et habanero et la sauce samourai. Votre ventre va aussi gonflé comme votre grand mère obèse grâce au steak, aux frites et aux tomates.", "photo"=>"product_img/tacos-caliente.png", "id"=>4);
$productsList = [
    new product($bowlBurger['name'], $bowlBurger['price'], $bowlBurger['description'], $bowlBurger['photo'], $bowlBurger['id']),
    new product($tacosSavoyard['name'], $tacosSavoyard['price'], $tacosSavoyard['description'], $tacosSavoyard['photo'], $tacosSavoyard['id']),
    new product($bowlCode42['name'], $bowlCode42['price'], $bowlCode42['description'], $bowlCode42['photo'], $bowlCode42['id']),
    new product($saladeCesar['name'], $saladeCesar['price'], $saladeCesar['description'], $saladeCesar['photo'], $saladeCesar['id']),
    new product($tacosCaliente['name'], $tacosCaliente['price'], $tacosCaliente['description'], $tacosCaliente['photo'], $tacosCaliente['id'])
];
?>