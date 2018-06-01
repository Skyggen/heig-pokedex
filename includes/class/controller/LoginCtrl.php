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

        if (!(User::isUserExist($user) && password_verify($pswd, User::getUserPasswordHash($user))))
            $loginOk = false;

        if (!$loginOk)
            $this->getTPL()->display('login.tpl');
        else {
            Session::set("pseudo", $user);

            $this->getTPL()->assign("user", $user);
            $this->getTPL()->display('loginOk.tpl');
        }


    }

    public function signup() {
        $this->getTPL()->display('registration.tpl');
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