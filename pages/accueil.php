<?php
    $title = 'ECORIDE - Accueil';
    $description = 'ECORIDE, le site spécialiste du covoiturage en France';
?>

<section>
    <div id="formuAcceuil">
        <img src="img/acceuil-image.jpg" alt="image acceuil">
        <form action="/ecf-covoit/covoiturage.php" method="post">
            <div><input type="text" name="departure" id="depart" placeholder="Départ"></div>
            <div><input type="text" name="arrival" id="arrive" placeholder="Arrive"></div>
            <div><input type="date" name="date" id="date"></div>
            <div><input type="number" name="nbrpassenger" id="nbrpassager" min="0" max="4" placeholder="Nombre de passager"></div>
            <div><input type="submit" id="search" value="Rechercher"></input></div>
        </form>
    </div>
</section>

<section id="sectionInfo">
    <div class="imgSetting" id="covoit">
        <img src="img/img-cocovoit.jpg" alt="Covoiturages" width="300px" height="200px">
        <div class="textSetting">
            <h2>Qui sommes-nous ?</h2>
            <p>Chez EcoRide, nous croyons qu’il est possible de se déplacer autrement :
            de manière plus responsable, plus solidaire et plus économique.
            <br>Notre route, c’est celle d’un avenir où chaque trajet en voiture peut devenir
            un geste pour la planète.</br>
            </p>
        </div>
    </div>

    <div class="imgSetting" id="conducteur">
        <img src="img/img-conducteur.jpg" alt="Nos conducteurs" width="300px" height="200px">
        <div class="textSetting">
            <h2>Nos Conducteurs</h2>
            <p>Chaque conducteur est soigneusement
                vérifié pour garantir la sécurité de tous.
                <br>Mais au-delà de la sécurité, nos conducteurs partagent une même vision
                : rouler utile, rouler responsable. Ils choisissent le covoiturage
                pour réduire leur impact environnemental, limiter les trajets à vide 
                et contribuer activement à une mobilité plus durable.</p>
        </div>
    </div>
</section>

<section>
    <div id="bottomContact">
        <h2>Contactez-nous</h2>
        <p>Vous avez une question, une remarque ou un besoin spécifique concernant EcoRide ?
            Notre équipe est à votre disposition pour vous apporter une réponse claire et rapide.
            N’hésitez pas à nous contacter, que vous soyez conducteur, passager ou partenaire potentiel, nous sommes à votre écoute.</p>
    </div>
</section>