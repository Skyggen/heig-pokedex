<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class FichePokemon
{
    private  $no, $nom, $description;

    public function __construct($no_fichePokemon,$nomPok,$descriptionPok)
    {
        $this->no = $no_fichePokemon;
        $this->nom = $nomPok;
        $this->description = $descriptionPok;
    }

    public static function getAllFichePok(){
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT * FROM fichePokemon";
        $param = array();
        $brutResults = $db->selectQuery($SQL,$param);
        $tabFichePok = array();
        for($i=0;$i<count($brutResults);$i++){
            $tabFichePok[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabFichePok;

    }
    private static function arrayToObject($tabFichePok){

        return new FichePokemon($tabFichePok['no'],$tabFichePok['nom'],$tabFichePok['description']);
    }
}