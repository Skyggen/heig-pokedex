<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 30.05.2018
 * Time: 17:13
 */
//include "Ctrl.php";
class LoginCtrl extends Ctrl {
   public  function login () {

       $this->getTPL()->display('login.tpl');
   }
    public function checkLogin($user, $pswd) {
        $loginOk = true;

        if (empty($user) || empty($pswd))
            $loginOk = false;

        if (!(Dresseurs::isUserExist($user) && password_verify($pswd, Dresseurs::getDresseursPasswordHash($user))))
            $loginOk = false;

        if (!$loginOk)
            $this->getTPL()->display('login.tpl');
        else {
            Session::set("pseudo", $user);

            $this->getTPL()->assign("pseudo", $user);
            $this->getTPL()->display('loginOk.tpl');
        }


    }

    public function signup() {
        $this->getTPL()->display('registration.tpl');
    }

    public function checkAndSaveRegistration($user, $pswd) {
        $db = new db();
        try {
            $db->pdo->beginTransaction();
            $q = $db->pdo->prepare("INSERT INTO dresseurs (pseudo, password) VALUES (:pseudo,:password)");
            $q->bindParam(":pseudo", $user, PDO::PARAM_STR, 50);
            $q->bindParam(":password", password_hash($pswd, PASSWORD_DEFAULT), PDO::PARAM_STR, 255);
            $q->execute();


            $db->pdo->commit();
            $this->checkLogin($user, $pswd);
        } catch (Exception $e) {
            $db->pdo->rollBack();
            $this->getTPL()->assign("error", $e->getMessage());
            $this->getTPL()->display("error.tpl");
        }
    }

}



//class LoginCtrl extends Ctrl {
 //   public function login () {
  //      $this->getTPL()->display('login.tpl');
  //  }
  //  public function signup() {
  //      $this->getTPL()->display('registration.tpl');
  //  }
//}