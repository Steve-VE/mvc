<?php
ob_start();
?>

<footer>
<p>
    © 2018 Didier Motte +32 495 20 59 34 - 
    <a href="mailto:dmotte@skynet.be">dmotte@skynet.be</a> - 
    <a href="?page=contact">Plan d'accès</a>
</p>
<p>
    Décorateur, Antiquités, Aménagement d'intérieurs, Belgique
</p>
<p>
    Restez à jour via: 
    <a href="https://www.facebook.com/antiquites.decoration">Facebook</a> 
    <a href="https://www.instagram.com/DidierMotte/">Instagram</a>
</p>
<p>
    Conçu &amp; développé par <a href="https://pixeline.be/">pixeline</a>
</p>
</footer>

<?php
$content .= ob_get_clean();
?>