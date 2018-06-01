<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class FichePokemon
{
    private $noPokemon, $nivPokemon, $sexe, $no_fichePokemon;

    public function __construct($noPokemon,$nom,$description,$type, $nivPokemon, $sexe, $no_fichePokemon)
    {
        $this->noPokemon = $noPokemon;
        $this->nivPokemon = $nivPokemon;
        $this->sexe = $sexe;
        $this->no_fichePokemon = $no_fichePokemon;
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

        return new Dresseurs($tabFichePok['no'],$tabFichePok['nom'],$tabFichePok['description']);
    }
}