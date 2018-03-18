<?php
ob_start();

?>

<section class="quote">
    <div class="quote">
        <p>
            "L'ennui naquit un jour de l'uniformité"
        </p>
        <p>
            – Antoine Houdar de la Motte
        </p>
    </div>
</section>


<?php
$content .= ob_get_clean();
?>