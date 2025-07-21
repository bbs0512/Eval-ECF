<?php

define('DOSSIER_PAGES', 'pages/');
// define('DOSSIER_PAGES_ADMIN', 'admin/');
define('PAGE_EXTENSION', 'php');
define('PAGE_ACCUEIL', 'accueil');
define('PAGE_COVOITURAGE', 'covoiturage');
define('PAGE_CONTACT', 'contact');
define('PAGE_CONNEXION', 'connexion');
define('PAGE_MONCOMPTE', 'moncompte');
define('PAGE_INSCRIPTION', 'inscription');
// define('PAGE_SIGNUP_INC', 'signup.inc');

$page = isset($_GET['page']) ? $_GET['page'] : '';
if (!file_exists(DOSSIER_PAGES . $page . '.' . PAGE_EXTENSION) /*&& !file_exists(DOSSIER_PAGES_ADMIN . $page . '.' . PAGE_EXTENSION)*/) {
    $page = PAGE_ACCUEIL;
}

function getPage() {

    global $page;
    ob_start();

    $title = '';
    $description = '';

    require DOSSIER_PAGES . $page . '.' . PAGE_EXTENSION;
    $content = ob_get_contents();
    ob_clean();

    return array($content, $title, $description);
}

