<?php
ob_start();
?>

<header class="empty"></header>
<section class="card">
    <div class="card">
        <a href="index.php">
            <img src="assets/img/touchwood-logo-sans-slogan-nobelBold.png" alt="Didier Motte"/>
        </a>
        <ul>
            <li>Antiquités</li>
            <li>Décoration</li>
            <li>Aménagements d'intérieur</li>
        </ul>
        <div class="phone">
            <a href="tel:+32495205934">+32 495/20.59.34</a>
        </div>
        <nav>
            <a class="button" href="?page=about">
                Présentation
            </a>
            <a class="button" href="?page=stock">
                Le stock
            </a>
            <a class="button" href="?page=contact">
                Contact
            </a>
        </nav>
    </div>
</section>


<?php
$content .= ob_get_clean();
?>