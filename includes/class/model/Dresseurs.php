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

    public static function isUserExist($pseudo){
        $db = new  db(unserialize(TBCONF));
        return !empty($db->selectQuery("select * from dresseurs where pseudo=?",array($pseudo)));
    }

    public static function getDresseursPasswordHash($pseudo){
        $db = new  db(unserialize(TBCONF));;
        $result = $db->selectQuery("select * from dresseurs where pseudo=?",array($pseudo));
        $dresseur=self::arrayToObject($result[0]);

        if(!empty($result)){
            return $dresseur->password;

        }else{return "";}
    }

    public static function getDresseurId($pseudo){
        $db = new  db(unserialize(TBCONF));;
        $result = $db->selectQuery("select * from dresseurs where pseudo=?",array($pseudo));
        if(!empty($result)){
            return (int)$result[0]->id;

        }else{return "";}
    }
}
