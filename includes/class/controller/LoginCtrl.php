<?php

/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 30.05.2018
 * Time: 17:13
 */
class LoginCtrl extends Ctrl
{
    /**
     * affichage de la page du login
     */
    public function login()
    {
        $this->getTPL()->display('login.tpl');
        // var_dump($_SESSION);
    }

    /**
     * @param $pseudo
     * @param $pswd
     */
    public function checkLogin($pseudo, $pswd)
    {
        $loginOk = true;

        if (empty($pseudo) || empty($pswd))
            $loginOk = false;


        if (!(Dresseurs::isUserExist($pseudo))) {
            //  var_dump("pseudo existe" . $pswd.$pseudo);
            $loginOk = false;

        }

        if (!(password_verify($pswd, Dresseurs::getDresseursPasswordHash($pseudo)))) {
            //  var_dump("password" . $pswd.$pseudo);
            $loginOk = false;

        }
        if (!$loginOk) $this->getTPL()->display('login.tpl');

        else {
            Session::set("pseudo", $pseudo);
            $_SESSION["Authenticated"] = true;
            $_SESSION["pseudo"] = $pseudo;
            header('Location: game.php');
        }
        //var_dump($_SESSION);

    }

    /**
     * affichage de la page de confirmation du logout
     */
    public function logout()
    {
        Session::destroy();
        $this->getTPL()->display('logout.tpl');
    }

    /**
     * affichage de la page d'inscription
     */
    public function signup()
    {
        $this->getTPL()->display('registration.tpl');
    }

    /**
     * @param $pseudo
     * @param $pswd
     */
    public function checkAndSaveRegistration($pseudo, $pswd)
    {
        $db = new  db(unserialize(TBCONF));
        try {
            $db->pdo->beginTransaction();
            $q = $db->pdo->prepare("INSERT INTO dresseurs (pseudo, password) VALUES (:pseudo,:password)");
            $q->bindParam(":pseudo", $pseudo, PDO::PARAM_STR, 50);
            $q->bindParam(":password", password_hash($pswd, PASSWORD_DEFAULT), PDO::PARAM_STR, 255);
            $q->execute();


            $db->pdo->commit();
            $this->checkLogin($pseudo, $pswd);
        } catch (Exception $e) {
            $db->pdo->rollBack();
            $this->getTPL()->assign("error", $e->getMessage());
            $this->getTPL()->display("error.tpl");
        }
    }

}
