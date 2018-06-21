<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 31.05.2018
 * Time: 12:51
 */

class Dresseurs

{
    private $no, $pseudo, $password;

    /**
     * Dresseurs constructor.
     * @param $no
     * @param $pseudo
     * @param $password
     */
    public function __construct($no, $pseudo, $password)
    {
        $this->no = $no;
        $this->pseudo = $pseudo;
        $this->password = $password;
    }

    /**
     * @return array
     */
    public static function getAllDresseurs()
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT * FROM dresseurs";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);
        $tabDresseurs = array();
        for ($i = 0; $i < count($brutResults); $i++) {
            $tabDresseurs[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabDresseurs;

    }

    /**
     * @param $tbDresseur
     * @return Dresseurs
     */
    private static function arrayToObject($tbDresseur)
    {

        return new Dresseurs($tbDresseur['no'], $tbDresseur['pseudo'], $tbDresseur['password']);
    }

    /**
     * @param $pseudo
     * @return bool
     */
    public static function isUserExist($pseudo)
    {
        $db = new  db(unserialize(TBCONF));
        return !empty($db->selectQuery("select * from dresseurs where pseudo=?", array($pseudo)));
    }

    /**
     * @param $pseudo
     * @return string
     */
    public static function getDresseursPasswordHash($pseudo)
    {
        $db = new  db(unserialize(TBCONF));;
        $result = $db->selectQuery("select * from dresseurs where pseudo=?", array($pseudo));
        $dresseur = self::arrayToObject($result[0]);

        if (!empty($result)) {
            return $dresseur->password;

        } else {
            return "";
        }
    }

    /**
     * @param $pseudo
     * @return string
     */
    public static function getDresseurId($pseudo)
    {
        $db = new  db(unserialize(TBCONF));;
        $result = $db->selectQuery("select * from dresseurs where pseudo=?", array($pseudo));
        if (!empty($result)) {
            return $result[0][0];

        } else {
            return "";
        }
    }
}
