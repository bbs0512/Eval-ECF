<?php

require_once '../classes/Signup.classes.php';

class SignupController extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            // echo 'Empty input';
            header('location: /ecf-covoit/inscription.html?error=emptyinput');
            exit();
        }

        if ($this->invalidUid() == false) {
            // echo 'Pseudo invalide';
            header('location: /ecf-covoit/inscription.html?error=pseudo');
            exit();
        }

        if ($this->invalidEmail() == false) {
            // echo 'Email invalide';
            header('location: /ecf-covoit/inscription.html?error=email');
            exit();
        }

        if ($this->pwdMatch() == false) {
            // echo 'MDP ne correspond pas';
            header('location: /ecf-covoit/inscription.html?error=passwordmatch');
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            // echo 'Pseudo ou email deja existant';
            header('location: /ecf-covoit/inscription.html?error=useroremailtaken');
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result = false;

        if ( empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email) ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    /* verifie que le pseudo correspond bien à l'expression regulière d'une chaine alphanumerique de a à z, A à Z
        et 0 à 9 
     */
    private function invalidUid() {
        $result = false;

        if ( !preg_match("/^[a-zA-Z0-9]*$/", $this->uid) ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // verifie que l'email est bien une adresse mail valide
    private function invalidEmail() {
        $result = false;

        if ( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // Verifie la correspondance des 2 champs du mot de passe
    private function pwdMatch() {
        $result = false;

        if ( $this->pwd !== $this->pwdRepeat ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    // verifie que l'utilisateur n'est pas déja enregistré dans la BDD
    private function uidTakenCheck() {
        $result = false;

        if ( !$this->checkUser($this->uid, $this->email) ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}