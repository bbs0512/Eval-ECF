<?php

if(isset($_POST['submit'])) {

    // Récuperer les données
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instancier la classe LoginController
    include '../classes/models/Dbh.classes.php';
    include '../classes/Login.classes.php';
    include '../classes/controllers/LoginController.classes.php';

    $login = new LoginController($uid, $pwd);

    // Execution de la gestion des erreurs et inscription de l'utilisateur
    $login->loginUser();

    // On redirige l'utilisateur sur le Front
    header('location: ../dashboard.php?error=none');
}