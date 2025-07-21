<?php

if(isset($_POST['submit'])) {

    // Récuperer les données
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['confirmpwd'];

    // Instancier la classe SignupController
    include '../classes/models/Dbh.classes.php';
    include '../classes/Signup.classes.php';
    include '../classes/controllers/SignupController.classes.php';

    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

    // Execution de la gestion des erreurs et inscription de l'utilisateur
    $signup->signupUser();

    // On redirige l'utilisateur sur le Front
    header('location: /ecf-covoit/inscription.html?error=none');
}