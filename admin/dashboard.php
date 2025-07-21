<?php
session_start();

if ( isset($_SESSION['userid']) && ( $_SESSION['role'] == 1 || $_SESSION['role'] == 2 ) ) {
    echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
}
?>