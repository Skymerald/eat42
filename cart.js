let session = sessionStorage;
//add one of argumentId to the cart
function addToCart(argumentId){
    let currentNumber = NaN;
    if(session.getItem(argumentId) == null){
        currentNumber = 1;
        session.setItem(argumentId, 1);
    }
    else{
        currentNumber = parseInt(session.getItem(argumentId));
        session.setItem(argumentId, currentNumber+=1);
    }
    if(window.location.pathname.includes("cart")){
        displayCart();
        displayCheckout();
    }
}
//remove one of argumentId to the cart until it is at one
function removeToCart(argumentId){
    let currentNumber = NaN;
    if(session.getItem(argumentId) == 1){
        session.setItem(argumentId, 1)
    }
    else{
        currentNumber = parseInt(session.getItem(argumentId));
        session.setItem(argumentId, currentNumber-=1);
    } 
    if(window.location.pathname.includes("cart")){
        displayCart();
        displayCheckout();
    }
}
//delete all the argumentId from the cart
function deleteToCart(argumentId){
    session.removeItem(argumentId);
    document.getElementById('cart'+argumentId).remove();
    document.getElementById('checkout'+argumentId).remove();
    displayCart();
    displayCheckout();
}
function getCart(){
    let i = 0;
    let currentCart = new Object();
    while(session.key(i) !== null){
        let key = session.key(i);
        let value = parseInt(session.getItem(key));
        currentCart[key] = value;
        i++;
    }
    return currentCart;
}
function displayCart(){
    let cartContainer = document.querySelector('.cart-container');
    let cart = getCart();
    let keys = Object.keys(cart);
    if(Object.keys(cart).length === 0){
        let title = document.createElement('div');
        title.classList.add('empty-cart-title');
        title.innerText = "Votre panier est vide !"
        cartContainer.appendChild(title);
    }
    else{
        keys.forEach(key => {
            displayCartProduct(key, cart[key]);
        });
    }
}
function displayCartProduct(){
    let cartContainer = document.querySelector('.cart-container'); 
    let cart = getCart(); 
    let keys = Object.keys(cart); cartContainer.innerHTML = ''; 
    if (keys.length != 0) { 
         keys.forEach(key => { 
            let container = createCartElement(key, cart[key]); 
            cartContainer.appendChild(container); 
        });
    } 
    
}
function createCartElement(key, value) {
    let euroIcon = document.createElement('i');
    euroIcon.classList.add('fa-solid', 'fa-euro-sign');

    let container = document.createElement('div');
    let cartName = document.createElement('h2');
    let cartNumberContainer = document.createElement('div');
    let cartNumberMinusBtn = document.createElement('i');
    let cartNumberPlusBtn = document.createElement('i');
    let cartNumber = document.createElement('h3');
    let cartPrice = document.createElement('h3');
    let cartTotalPrice = document.createElement('h3');
    let cartDeleteBtn = document.createElement('i');

    container.classList.add('cart-section');
    container.id='cart'+key;
    cartName.classList.add('cart-name');
    cartNumberContainer.classList.add('cart-number-container');
    cartNumberMinusBtn.classList.add('fa-solid', 'fa-circle-minus');
    cartNumberPlusBtn.classList.add('fa-solid', 'fa-circle-plus');
    cartNumber.classList.add('cart-number');
    cartPrice.classList.add('cart-price');
    cartTotalPrice.classList.add('cart-total-price');
    cartDeleteBtn.classList.add('fa-solid', 'fa-trash-can', 'cart-delete-btn');

    cartName.innerText = key;
    cartNumber.innerText = value;
    cartPrice.innerText = 50;
    cartTotalPrice.innerText = 50 * value;

    container.appendChild(cartName);
    container.appendChild(cartNumberContainer);

    cartNumberPlusBtn.onclick = function(){addToCart(key);};
    cartNumberMinusBtn.onclick = function(){removeToCart(key);};

    cartNumberContainer.appendChild(cartNumberMinusBtn);
    cartNumberContainer.appendChild(cartNumber);
    cartNumberContainer.appendChild(cartNumberPlusBtn);

    cartPrice.appendChild(euroIcon.cloneNode(true)); // Clone the icon for separate use
    container.appendChild(cartPrice);
    
    cartTotalPrice.appendChild(euroIcon.cloneNode(true));
    container.appendChild(cartTotalPrice);

    container.appendChild(cartDeleteBtn);

    cartDeleteBtn.onclick = function(){deleteToCart(key);};

    return container;
}
function deleteCart(){
    let cartElement = document.getElementsByClassName('cart-section');
    let checkoutContainer = document.getElementsByClassName('checkout-section');
    let i = cartElement.length - 1;
    while(i+1 != 0){
        cartElement = document.getElementsByClassName('cart-section');
        checkoutContainer = document.getElementsByClassName('checkout-section');
        cartElement[i].remove();
        checkoutContainer[i].remove();
        i--;
    }
    session.clear();
    displayCart();
    displayCheckout();
}
function displayCheckout(){
    let checkoutContainer = document.querySelector('.checkout-resume-container');
    let checkout = getCart();
    let keys = Object.keys(checkout);
    if(Object.keys(checkout).length === 0){
        let title = document.createElement('div');
        title.classList.add('empty-checkout-title');
        title.innerText = "Rien à afficher ici !"
        checkoutContainer.appendChild(title);
        if(document.querySelector('.total-checkout-section')){
            document.querySelector('.total-checkout-section').remove();
        }
    }
    else{
        let totalPrice = 0;
        keys.forEach(key => {
            displayCheckoutProduct(key, checkout[key]);
            totalPrice += (50 * checkout[key]);
        });
        displayCheckoutTotal(totalPrice);
    }
}
function displayCheckoutProduct(){
    let checkoutContainer = document.querySelector('.checkout-resume-container'); 
    let checkout = getCart(); 
    let keys = Object.keys(checkout); 
    checkoutContainer.innerHTML = ''; 
    if (keys.length !== 0) { 
        keys.forEach(key => { 
            let container = createCheckoutElement(key, checkout[key]); 
            checkoutContainer.appendChild(container); 
        });
    } 
}
function createCheckoutElement(key, value){
    let euroIcon = document.createElement('i');
    euroIcon.classList.add('fa-solid', 'fa-euro-sign');

    let container = document.createElement('div');
    let cartName = document.createElement('h2');
    let cartNumber = document.createElement('h3');
    let cartPrice = document.createElement('h3');

    container.classList.add('checkout-section');
    container.id = 'checkout'+key;
    cartName.classList.add('checkout-name');
    cartNumber.classList.add('checkout-number');
    cartPrice.classList.add('checkout-price');

    cartName.innerText = key;
    cartNumber.innerText = 'x'+value;
    cartPrice.innerText = 50 * value;

    container.appendChild(cartName);
    container.appendChild(cartNumber);
    
    cartPrice.appendChild(euroIcon);
    container.appendChild(cartPrice);

    return container;
}
function displayCheckoutTotal(price){
    let euroIcon = document.createElement('i');
    euroIcon.classList.add('fa-solid', 'fa-euro-sign');

    let checkoutContainer = document.querySelector('.checkout-resume-container');

    let container = document.createElement('div');
    let priceTitle = document.createElement('h1');

    container.classList.add('total-checkout-section');
    priceTitle.classList.add('total-checkout-price');

    priceTitle.innerText = price;

    priceTitle.appendChild(euroIcon);

    container.appendChild(priceTitle);

    checkoutContainer.appendChild(container);
}
if(window.location.pathname.includes("cart")){
    window.addEventListener("load", displayCart());
    window.addEventListener("load", displayCheckout());
}
