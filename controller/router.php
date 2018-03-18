<?php

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

$product_id = null;

if(isset($_GET['product'])){
    $temp = intval($_GET['product']);
    if($temp >= 0){
        $product_id = $temp;
    }
}


include "views/head.php";

if($page == "home"){
    include "views/home.php";
}
else if($page == "stock"){
    if($product_id !== null){
        include "views/product.php";
    }
    else include "views/stock.php";
}
else{
    include "views/". $page .".php";
}

include "views/footer.php";