<?php 
class product{
    private $name = "";
    private $price = "";
    private $description = "";
    private $photo = "";
    private $id;

    /*Fonction de constructeur
     * attribue $name, $price et $description
     * pour setup les variables
     * $p_name, $p_price et $_description
     */
    public function __construct($name, $price, $description, $photo, $id){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->photo = $photo;
        $this->id = $id;

    }

    /**Fonction display
     * Creer automatiquement les div necessaire
     * pour afficher le produits avec les bonne classes.
     */
    public function display(){
        echo('<div class="product-section" id="'.$this->id.'">');
        echo('<img title="'.$this->name.'-photo" class="product-img" src="'.$this->photo.'">');
        echo('<div class="product-text-section">');
        echo('<h1 class="product-title">' . $this->name . '</h1>');
        echo('<h2 class="product-description">' . $this->description . '</h2>');
        echo('<div class="product-bottom-section">');
        echo('<h3 class="product-price">' . $this->price . '<i class="fa-solid fa-euro-sign"></i></h3>');
        //echo('<script src="cart.js"></script>');
        echo('<i class="fa-solid fa-cart-shopping buy-icon"></i>');
        echo('</div></div></div>');
    }

    /**Fonction create
     * Utilise la fonction constructeur pour initialiser les
     * attribut de l'objet en prenant uniquement un tableau
     * associatif en argument
     */
    function create($attributeArray){
        if(is_array($attributeArray)){
            if(!empty($attributeArray['name']) && !empty($attributeArray['price']) && !empty($attributeArray['description'])){
                $this->__construct($attributeArray['name'], $attributeArray['price'], $attributeArray['description']);
                var_dump("initialized");
            }
        }
    }

    function addToCart(){
        $_SESSION['cart'][$this->id]++;
    }
}

?>