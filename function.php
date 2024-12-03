<?php

function getPost($id){
    if(!empty($_GET[$id])){
        return $_GET[$id];
    }
    else if(!empty($_POST[$id])){
        return $_POST[$id];
    }
    else{
        return "";
    }
}

?>