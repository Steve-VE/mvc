<?php
    include "views/header.php";

    ob_start();
?>

<main>
    
    <?php
        include("views/list_tag.php");
    ?>
</main>

<?php
    $content .= ob_get_clean();
?>