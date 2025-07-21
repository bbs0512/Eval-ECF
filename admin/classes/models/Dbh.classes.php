<?php

class Dbh {

    protected function connect() {

        try {
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysql:host=localhost;dbname=ecoride', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print 'Erreur !: ' . $e->getMessage() . '<br>';
            die();
        }

    }

}