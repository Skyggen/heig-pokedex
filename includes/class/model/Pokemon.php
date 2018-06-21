<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class Pokemon
{
    public $noPokemon, $nom, $description, $nivPokemon, $sexe, $noFichePokemon, $nomType;

    /**
     * Pokemon constructor.
     * @param $noPokemon
     * @param $nom
     * @param $description
     * @param $nomType
     * @param $sexe
     * @param $nivPokemon
     * @param $noFichePokemon
     */
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

    /**
     * @return array
     */
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

    /**
     * @param $idDresseurs
     * @return array
     */
    public static function getPokCapFromDresseur($idDresseurs)
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT fichepokemon.no,fichepokemon.nom,pokemon.nivPok,pokemon.sexe,fichepokemon.description, 
                (select GROUP_CONCAT(types.nomType) from types,types_has_fichepokemon WHERE types.no = types_has_fichepokemon.noType 
                AND types_has_fichepokemon.noFichePokemon=fichepokemon.no) as 'types' FROM pokemon 
                INNER JOIN fichepokemon on pokemon.noFichePok = fichepokemon.no 
                inner join capture on capture.nopokemon = pokemon.no where capture.noDresseurs = $idDresseurs  ";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);

        $tabPok = array();
        for ($i = 0; $i < count($brutResults); $i++) {
            $tabPok[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabPok;

    }

    /**
     * @return Pokemon
     */
    public static function rndPokemon()
    {
        $rndId = rand(1, FichePokemon::countFichePokemon());
        $rndSexe = rand(1, 2);

        $rndNiv = rand(1, 100);
        $idPok = self::createPokemon($rndId, $rndNiv, $rndSexe == 1 ? "male" : "femelle");
        return self::findPokemon($idPok);
    }


    /**
     * @param $idPok
     * @return Pokemon
     */
    public static function findPokemon($idPok)
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT DISTINCT * FROM pokemon INNER JOIN fichepokemon on pokemon.noFichePok = fichepokemon.no 
                inner join types_has_fichepokemon on fichepokemon.no = types_has_fichepokemon.noFichePokemon
                inner join types on types.no = types_has_fichepokemon.noType      
                where pokemon.no =  $idPok  ";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);
        $tabPok = self::arrayToObject($brutResults[0]);
        return $tabPok;

    }

    /**
     * @param $noFichePok
     * @param $nivPok
     * @param $sexe
     * @return null|string
     */
    public static function createPokemon($noFichePok, $nivPok, $sexe)
    {
        // TODO : d autre verification doivent etre faite

        if ($sexe != 'male' && $sexe != 'femelle')
            return null;

        $db = new db(unserialize(TBCONF));
        $SQL = "INSERT INTO pokemon (noFichePok, nivPok, sexe)
            VALUES ($noFichePok, $nivPok, '$sexe');  ";
        $idPok = $db->insertQuery($SQL);
        return $idPok;

    }

    /**
     * @param $noDresseurs
     * @param $noPokemon
     */
    public static function addToPokedex($noDresseurs, $noPokemon)
    {

        $db = new db(unserialize(TBCONF));
        $SQL = "INSERT INTO capture (noDresseurs,noPokemon)
            VALUES ('$noDresseurs', '$noPokemon');  ";
        $db->insertQuery($SQL);
    }

    /**
     * @param $tabPok
     * @return Pokemon
     */
    private static function arrayToObject($tabPok)
    {
        if (!isset($tabPok['noFichePok']))
            $tabPok['noFichePok'] = -1;
        if (!isset($tabPok['nomType']))
            $tabPok['nomType'] = isset($tabPok['types']) ? $tabPok['types'] : '';


        return new Pokemon($tabPok[0], $tabPok['nom'], $tabPok['description'], $tabPok['nomType'], $tabPok['sexe'], $tabPok['nivPok'], $tabPok['noFichePok']);
    }


}