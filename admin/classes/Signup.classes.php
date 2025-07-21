<?php

require_once 'models/Dbh.classes.php';

class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO utilisateur (nom, prenom, email, password, telephone, adresse, date_naissance, photo, pseudo, role_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array('', '', $email, $hashedPwd, '', '', '', '', $uid, 3))) {
            $stmt = null;
            header('location: /ecf-covoit/inscription.html?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header('location: /ecf-covoit/inscription.html?error=stmtfailed');
            exit();
        }

        $resultCheck = false;
        $signupDataCount = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($signupDataCount) > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}