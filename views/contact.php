<?php
include "views/header.php";
ob_start();
?>


<main>
    <div class="col-center">
        <h1>Contact</h1>
        <h2>Le Magasin</h2>
        <p>
            Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.
        </p>
        <p>
            Didier Motte<br>
            <a class="button lower" href="mailto:dmotte@skynet.be">
                dmotte@skynet.be
            </a>
        </p>
        <p>
            +32 495 20.59.34<br>
            Rue Saint Georges 35<br>
            B-1400 Nivelles<br>
            Belgique.
        </p>
        <p>
            Retrouvez nos mises à jour en vous <a class="button lower" href="https://www.facebook.com/antiquites.decoration">abonnant à notre page Facebook</a>
        </p>

        <div id="map"></div>
        <form action="">
            <label >
                Lieu de départ : 
                <input type="text" name="" id="">
                <input type="submit" value="Itinéraire">
            </label>
        </form>

    </div>
</main>
<script>
    var map;

    function initMap() {
        var location = {lat: 50.597, lng: 4.327};
        
        map = new google.maps.Map(document.getElementById('map'), {
        center: location,
        zoom: 15
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: 'Didier Motte'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtJ_OaSZgW5fWOVY9tNaYMRLFXT-A7faM&callback=initMap" async defer></script>

<?php
$content .= ob_get_clean();
?>