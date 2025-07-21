<?php
    $title = 'ECORIDE - Inscription';
    $description = 'ECORIDE, le site spécialiste du covoiturage en France';
?>

<div id="formuInscription">
    <div id="titreInscription">
        <h2>S'inscrire</h2>
    </div>
    <div>
        <form action="/ecf-covoit/admin/includes/signup.inc.php" method="post">
            <div>
                <input type="text" name="uid" id="pseudoFormInscription" placeholder="Pseudo">
            </div>
            <div>
                <input type="email" name="email" id="mailFormInscription" placeholder="Email">
            </div>
            <div>
                <input type="password" name="pwd" id="passwordFormInscription" placeholder="Mot de passe">
            </div>
            <div>
                <input type="password" name="confirmpwd" id="passwordFormInscription2" placeholder="Confirmer Mot de passe">
            </div>
            <button type="submit" name="submit" id="buttonFormContact">Envoyer</button>
        </form>
    </div>
</div>
        