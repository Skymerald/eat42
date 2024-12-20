<?php 

class product{
    private $name = "";
    private $price = "";
    private $description = "";
    private $photo = "";

    /*Fonction de constructeur
     * attribut $name, $price et $description
     * pour setup les variables
     * $p_name, $p_price et $_description
     */
    public function __construct($name, $price, $description, $photo){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->photo = $photo;
    }


    public function display(){
        echo("<div class=\"product-section\">");
        echo("<img title=\"".$this->name."-photo\" class=\"product-img\" src=\"".$this->photo."\">");
        echo("<div class=\"product-text-section\">");
        echo("<h1 class=\"product-title\">" . $this->name . "</h1>");
        echo("<h2 class=\"product-description\">" . $this->description . "</h2>");
        echo("<div class=\"product-bottom-section\">");
        echo("<h3 class=\"product-price\">" . $this->price . "</h3>");
        echo("<i class=\"fa-solid fa-cart-shopping buy-icon\"></i>");
        echo("</div></div></div>");
    }


    function create($attributeArray){
        if(is_array($attributeArray)){
            if(!empty($attributeArray['name']) && !empty($attributeArray['price']) && !empty($attributeArray['description'])){
                $this->__construct($attributeArray['name'], $attributeArray['price'], $attributeArray['description']);
                var_dump("initialized");
            }
        }
    }
}

?>