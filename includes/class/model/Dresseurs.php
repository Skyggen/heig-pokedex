<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 31.05.2018
 * Time: 12:51
 */

class Dresseurs

{
    private $no, $pseudo,$password;

    public function __construct($no, $pseudo,$password)
    {
        $this->no = $no;
        $this->pseudo = $pseudo;
        $this->password = $password;
    }

    public static function getAllDresseurs(){
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT * FROM dresseurs";
        $param = array();
        $brutResults = $db->selectQuery($SQL,$param);
        $tabDresseurs = array();
        for($i=0;$i<count($brutResults);$i++){
            $tabDresseurs[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabDresseurs;

    }

    private static function arrayToObject($tbDresseur){

        return new Dresseurs($tbDresseur['no'],$tbDresseur['pseudo'],$tbDresseur['password']);
    }
}
