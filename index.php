<?php
require 'functions.php';
list($content, $title, $description) = getPage();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <?php if (!empty($title)) : ?>
            <title><?php echo $title; ?></title>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
            <meta name="description" content="<?php echo $description; ?>">
        <?php endif; ?>

    </head>

    <body>
        <main>

            <div id="topBar">

                <div id="logo">
                    <img src="img/logo-covoit.png" alt="logo ECORIDE" width="64px" height="64px">
                    <h1>ecoride</h1>
                </div>

                <div id="menuBurger">
                    <img src="img/burger-icon.png" alt="menu">
                </div>

                <div id="menu">
                    <ul>
                        <li><a href="./">Accueil</a></li>
                        <li><a href="covoiturage.html">Covoiturages</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="connexion.html">Connexion</a></li>
                    </ul>
                </div>
                
            </div>
            
            <?php echo $content; ?>
            
        </main>

        <footer id="bottomBar">
            <p>ECORIDE, 2025</p>
            <p>ecoride@ecf.com.fr</p>
            <a href="Mentions Legales">Mentions Legales</a>
        </footer>

        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>