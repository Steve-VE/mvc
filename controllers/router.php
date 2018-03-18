<?php
// Controller : s'occupe d'aller chercher le bon contenu
include "controller.php";


// Gestion de la page à afficher 
$page="home";

$availible_page = [
    "home",
    "about",
    "stock",
    "contact"
];

if( isset($_GET['page']) && in_array($_GET['page'], $availible_page) ){
    $page = $_GET['page'];
}


if($page == "stock"){
    $product_id = null;
    
    if(isset($_GET['product'])){
        $temp = intval($_GET['product']);
        if($temp >= 0){
            $product_id = $temp;
        }
    }

    if($product_id !== null){
        load_page("product");
    }
    else load_page("stock");
}
else{
    load_page($page);
}

load_page("footer");