<?php

function standardise_name($string){
    $string = strtolower($string);
    $string = trim($string);
    $string = str_replace( ' ', '_', $string );
    return $string;
}

$stock = [
    [
        "thumbnail" => "IMG_3360-250x250",
        "name" => "Meuble-vitrine de chapelier"
    ],
    [
        "thumbnail" => "IMG_3402-250x250",
        "name" => "Meuble de barbier / coiffeur"
    ],
    [
        "thumbnail" => "IMG_3800-250x250",
        "name" => "Meuble de coiffeur / barbier"
    ],
    [
        "thumbnail" => "IMG_3940-250x250",
        "name" => "Comptoir de pharmacie - herboristerie double-face"
    ],
    [
        "thumbnail" => "IMG_E3546-250x250",
        "name" => "Comptoir de réception en chêne"
    ]
];

for($i = 0; $i < 3; $i++){ // Sert à gonfler artificiellement le stock
    $stock = array_merge($stock, $stock);
}

ob_start();
?>

<main>
    <h2>
        Le stock
    </h2>
    <form action="" method="post">
        <p>Fouiller le stock</p>
        <input type="text" name="" id="" placeholder="Exemple: table">
        <input type="submit" name="search" value="recherche">
    </form>

    <h3>
        Derniers objets
    </h3>
    <div class="container">
        <?php
            $product_id = 0;

            foreach($stock as $item){
                echo '<div class="item">';
                    echo '<a href="?page=stock&product='. $product_id .'">';
                        echo '<div class="image-container">';
                            echo '<img src="assets/img/items/'. $item['thumbnail'] .'.jpg" alt="'. $item['name'] .'"/>';
                        echo '</div>';
                        echo '<p>';
                            echo $item['name'];
                        echo '</p>';
                    echo '</a>';
                echo '</div>';

                $product_id++;
            }
        ?>
    </div>

    <nav>
        <div class="button active">1</div>
        <a class="button" href="?page=2">2</a>
        <a class="button" href="?page=3">3</a>
        <a class="button" href="?page=4">4</a>
        <a class="button" href="?page=5">5</a>
        <a class="button" href="?page=2">Suivant</a>
    </nav>
    
    <hr>

    <form action="" method="post">
        <p>Fouiller le stock</p>
        <input type="text" name="" id="" placeholder="Exemple: table">
        <input type="submit" name="search" value="recherche">
    </form>

    <?php
        include("views/list_tag.php");
    ?>
</main>


<?php
$content .= ob_get_clean();
?>