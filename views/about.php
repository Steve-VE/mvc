<?php
include "views/header.php";
ob_start();

$clients = [
    [
        "name" => "L'Oseille",
        "url" => null,
        "location" => "Paris",
        "description" => "Restaurant"
    ],
    [
        "name" => "Le Bistrot de la Galette",
        "url" => null,
        "location" => "Paris",
        "description" => "Restaurant"
    ],
    [
        "name" => "Barber Shoes",
        "url" => null,
        "location" => "Ixelles",
        "description" => "Barbier et chausseur"
    ],
    [
        "name" => "Eaux Vives",
        "url" => null,
        "location" => "Genèce",
        "description" => "Pharmacie"
    ],
    [
        "name" => "Big Moustache",
        "url" => null,
        "location" => "Paris",
        "description" => "Barbier"
    ],
    [
        "name" => "Balthazar",
        "url" => null,
        "location" => "Bruxelles",
        "description" => "Fauteuils design"
    ],
    [
        "name" => "Zahia",
        "url" => "http://zahia.be/",
        "location" => "Anvers, Gand, Brugge, Hasselt",
        "description" => "Bijoux"
    ],
    [
        "name" => "Vinopres",
        "url" => "http://www.vino-events.com/",
        "location" => "Bruxelles",
        "description" => "Publications sur le monde du vin"
    ],
    [
        "name" => "Le Relais du Triporteur",
        "url" => "http://le-relais-du-triporteur.be/#home",
        "location" => "Bruxelles",
        "description" => "Epicerie et restaurant Bio"
    ],
    [
        "name" => "Les Super Filles du Tram",
        "url" => "http://www.superfillesdutram.com/",
        "location" => "Bruxelles",
        "description" => "Restaurant"
    ],
    [
        "name" => "Intaglio",
        "url" => "http://www.intaglio.fr/",
        "location" => "Paris",
        "description" => "Imprimeur, graveur, papier de créations"
    ],
    [
        "name" => "Villa Alice",
        "url" => "http://www.villa-alice.be/",
        "location" => "Westande-bad",
        "description" => "Restaurant"
    ],
    [
        "name" => "Mammuti",
        "url" => null,
        "location" => "Ile de Ré",
        "description" => "Galerie , appartements d’hôtes"
    ],
    [
        "name" => "Etablissements Max Bloch",
        "url" => null,
        "location" => "Bruxelles",
        "description" => "Grossiste en tissus"
    ],
    [
        "name" => "Raw Materials",
        "url" => null,
        "location" => "Amsterdam",
        "description" => "Décoration"
    ],
    [
        "name" => "Mons 2015",
        "url" => null,
        "location" => null,
        "description" => "Restaurant La Maison Folie"
    ],
    [
        "name" => "La Mercerie",
        "url" => null,
        "location" => "Ixelles",
        "description" => "Salon de Thé et Dégustation"
    ],
    [
        "name" => "My Italian Friends",
        "url" => null,
        "location" => "Waterloo",
        "description" => "Restaurant et design italien"
    ],
]
?>

<main>
    <div class="col-center">
        <h1>Didier Motte</h1>
        <img src="assets/img/didier-grosplan-bw-o.png" alt="Didir Motte">

        <h2>
            Les meubles ont une histoire, authentique.
        </h2>
        <p>
            Toujours à la recherche de l’extra-ordinaire, de l’insolite, fasciné par la « petite » histoire du monde, celle des métiers d’autrefois, Didier Motte fait partie de ces quelques connaisseurs, brocanteurs ou décorateurs qui, à travers leur regard et leur toucher, savent percevoir l’histoire des objets anciens pour leur donner une nouvelle légitimité esthétique et fonctionnelle.
        </p>
        <p>
            Je fais essentiellement des anciens meubles de commerce, des intérieurs complets de vieux magasins, bistrots, pharmacies… J’ai un entrepôt à Luttre, à Nivelles et à Haerelbeek . Si vous êtes dans le coin, vous pouvez venir jeter un coup d’oeil ( appelez-moi auparavant au 0495 205 934 ).  À bientôt! – Didier.
        </p>
        
        <h2>
            Services
        </h2>
        <p>
            Location de meubles et accessoires pour tournage.
        </p>
        
        <h2>
            Livraison
        </h2>
        <p>
            Livraison dans toute l’Europe &amp; le monde.
        </p>
        
        <h2>
            Ils ont fait confiance
        </h2>
        
        <?php
        foreach($clients as $client){
            $client_line = strtoupper( $client['name'] );
            if($client['url'] != null){
                $client_line = '<a class="button" href="'. $client['url'] .'">'. $client_line .'</a>';
            }
            
            $client_line .= ' : ';
            
            if($client['location'] != null){
                $client_line .= '('. $client['location'] .') ';
            }
            
            $client_line .= $client['description'];
            echo '<p>'. $client_line .'.</p>';
        }
        ?>
    </div>
</main>

<?php
$content .= ob_get_clean();
?>