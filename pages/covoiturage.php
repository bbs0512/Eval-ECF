<?php
    $title = 'ECORIDE - Covoiturage';
    $description = 'ECORIDE, le site spécialiste du covoiturage en France';
?>

<section>
    <div id="formuAcceuil">
        <img src="img/img-page-covoiturage.jpg" alt="image acceuil">
        <form action="/ecf-covoit/covoiturage.php" method="post">
            <div><input type="text" name="departure" id="depart" placeholder="Départ"></div>
            <div><input type="text" name="arrival" id="arrive" placeholder="Arrive"></div>
            <div><input type="date" name="date" id="date"></div>
            <div><input type="number" name="nbrpassenger" id="nbrpassager" placeholder="Nombre de passager"></div>
            <div><input type="submit" value="Rechercher" id="search"></input></div>
        </form>
    </div>
</section>

<section id="sectionFiltre">
    <div id="filtreButton">
        <button id="filtres">Filtres</button>
        <a href="#">Effacer filtres</a>
    </div>
    

    <div id="filterContainer" class="none">
        <form action="/" id="filterDrive" method="get">
            <div id="travelType">
                <label for="travelType">Voyage écologique</label>
                <input type="checkbox" name="travelType">
            </div>
            <div class="filterPadding">
                <label for="maxPrice">Prix maximum</label>
                <input type="number" min="1" name="maxPrice" id="maxPrice">
            </div>
            <div class="filterPadding">
                <label for="maxDuration">Durée maximale</label>
                <input type="number" min="1" name="maxDuration" id="maxDuration">
            </div>
            <div class="filterPadding">
                <label for="driverNote"> Note</label>
                <input type="range" min="1" max="5" value="3" name="driverNote" id="driverNote">
            </div>
            <div><input type="submit" value="Filtrer" id="submit"></div>
        </form>
    </div>

</section>

<?php
    if (isset($_POST['departure']) & isset($_POST['arrival']) & isset($_POST['date']) & isset($_POST['nbrpassenger'])) {
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $date = $_POST['date'];
        $nbrpassenger = $_POST['nbrpassenger'];              
?>

<section id="carpoolingList">
    <p><?php echo $departure; ?></p>
    <p><?php echo $arrival; ?></p>
    <p><?php echo $date; ?></p>
    <p><?php echo $nbrpassenger; ?></p>
</section>

<?php 
    }
    else {
        echo '<p>Veuillez indiqué le lieu de départ, d\'arrivé, la date et le nombre de passager ...</p>';
    }

?>