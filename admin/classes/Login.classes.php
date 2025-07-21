<?php

require_once 'models/Dbh.classes.php';

class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT password FROM employe WHERE nom = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $uid))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($loginData[0]['password']);
        if (count($loginData) == 0) {
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

        // $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($pwdHashed);
        $checkPwd = password_verify($pwd, $loginData[0]['password']);

        if ($checkPwd == false) {
            $stmt = null;
            header('location: ../index.php?error=wrongpassword');
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM employe WHERE (nom = ? OR email = ?) AND password = ?;');

            if(!$stmt->execute(array($uid, $uid, $loginData[0]['password']))) {
                $stmt = null;
                header('location: ../index.php?error=stmtfailed');
                exit();
            }

            $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($loginData) == 0) {
                $stmt = null;
                header('location: ../index.php?error=usernotfound');
                exit();
            }

            // $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userid'] = $loginData[0]['employe_id'];
            $_SESSION['nom'] = $loginData[0]['nom'];
            $_SESSION['prenom'] = $loginData[0]['prenom'];
            $_SESSION['role'] = $loginData[0]['role_id'];
        }

        $stmt = null;
    }

}