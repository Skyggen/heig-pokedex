<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class Pokemon
{
    private $noPokemon, $nom, $description, $nivPokemon, $sexe, $noFichePokemon, $nomType;

    public function __construct($noPokemon, $nom, $description, $nomType, $sexe, $nivPokemon, $noFichePokemon)
    {
        $this->noPokemon = $noPokemon;
        $this->nom = $nom;
        $this->description = $description;
        $this->nivPokemon = $nivPokemon;
        $this->sexe = $sexe;
        $this->noFichePokemon = $noFichePokemon;
        $this->nomType = $nomType;

    }

    public static function getAllPokInf()
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT * FROM pokemon INNER JOIN fichepokemon where pokemon.noFichePok = fichepokemon.no ";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);
        $tabPok = array();
        for ($i = 0; $i < count($brutResults); $i++) {
            $tabPok[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabPok;

    }
 //   public static function getById($idPok) {
   //     $db = new DB();
    //    $result = $db->query("SELECT * from pokemon
     //       WHERE pokemon.no=$idPok;")->execute()->fetch_obj();


       // return new Pokemon();
    //}
    public static function getPokCapFromDresseur()
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT DISTINCT * FROM pokemon INNER JOIN fichepokemon on pokemon.noFichePok = fichepokemon.no 
                inner join types_has_fichepokemon on fichepokemon.no = types_has_fichepokemon.noFichePokemon
                inner join types on types.no = types_has_fichepokemon.noType
                inner join capture on capture.nopokemon = pokemon.no 
                inner join dresseurs on dresseurs.no = capture.noDresseurs
                where dresseurs.no = 1  ";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);
        $tabPok = array();
        for ($i = 0; $i < count($brutResults); $i++) {
            $tabPok[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabPok;

    }

// private static function arrayToObject($tabFichePok){
    private static function arrayToObject($tabPok)
    {
        return new Pokemon($tabPok['no'], $tabPok['nom'], $tabPok['nivPok'], $tabPok['description'], $tabPok['nomType'], $tabPok['sexe'], $tabPok['noFichePok']);
        //return new Dresseurs($tabFichePok['no'],$tabFichePok['nom'],$tabFichePok['description']);
    }


}