<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 30.05.2018
 * Time: 17:13
 */

//include "Ctrl.php";
class LoginCtrl extends Ctrl
{
    public function login()
    {

        $this->getTPL()->display('login.tpl');
       // var_dump($_SESSION);

    }

    public function checkLogin($pseudo, $pswd)
    {
        $loginOk = true;

        if (empty($pseudo) || empty($pswd))
            $loginOk = false;


        if (!(Dresseurs::isUserExist($pseudo) )){
          //  var_dump("pseudo existe" . $pswd.$pseudo);
            $loginOk = false;

        }

        if (!(password_verify($pswd, Dresseurs::getDresseursPasswordHash($pseudo)))){
          //  var_dump("password" . $pswd.$pseudo);
            $loginOk = false;

        }


        if (!$loginOk) $this->getTPL()->display('login.tpl');

        else {
            Session::set("pseudo", $pseudo);
            $_SESSION["Authenticated"] = true;
            $_SESSION["pseudo"]=$pseudo;
            header('Location: game.php');
        }
        //var_dump($_SESSION);

    }

    public function logout()
    {
        Session::destroy();
        $this->getTPL()->display('logout.tpl');
    }

    public function signup()
    {
        $this->getTPL()->display('registration.tpl');
    }

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
