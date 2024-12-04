<?php

/**une fonction permettant d'affecter a un variable
 * une variable POST ou GET passer en argument($id).
 * Elle verifie la valeur de POST ou GET avent de l'affecter,
 * pour donner la bonne valeur.
 * A FAIRE:
 * rajouter un cas si les deux valeur sont existante
 */
function getPost($id){
    if(!empty($_GET[$id])){
        return $_GET[$id];
    }
    if(!empty($_POST[$id])){
        return $_POST[$id];
    }
    if(empty($_GET[$id]) && empty($_POST[$id])){
        return "";
    }
}

?>