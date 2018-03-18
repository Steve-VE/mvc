<?php
ob_start();
?>

<header>
    <ul>
        <li>Antiquités</li>
        <li>Décoration</li>
        <li>Aménagements d'intérieur</li>
    </ul>
    <hr>
    <div class="profil-pic">
        <a href="index.php">
            <img src="assets/img/touchwood-logo-sans-slogan-nobelBold-black.png" alt="Didier Motte"/>
        </a>
    </div>
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
</header>

<?php
$content .= ob_get_clean();
?>