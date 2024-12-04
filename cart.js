function addToCart(elementId){
const cartSection = document.getElementById(elementId);
const cartBtn = cartSection.querySelector('i');
let phpCode = "<?php $_SESSION['cart'][" + elementId + "]++; ?>";
console.log(phpCode);
}