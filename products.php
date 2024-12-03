<?php 

class products(){
    private $p_name;
    private $p_price;
    private $p_description;
    
    function display(){
        echo("<div class=\"product-text-section\">")
        echo("<h1 class=\"product-title\">" . $p_name . "</h1>")
        echo("<div class=\"product-bottom-section>")
        echo("<h2 class=\"product-description\">" . $p_description . "</h2>")
        echo("<h3 class=\"product-price\">" . $p_price . "</h3>")
        echo("</div></div>")
    } 
    function create($attribute){
        if(is_array($attribute)){
            if(!empty($attribute['name']) && !empty($attribute['price']) && !empty($attribute['description'])){
                $p_name = $attribute['name'];
                $p_price = $attribute['price'];
                $p_description = $attribute['description'];
            }
        }
    }
}

?>