<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class FichePokemon
{

    private $no, $nom, $description;

    /**
     * FichePokemon constructor.
     * @param $no_fichePokemon
     * @param $nomPok
     * @param $descriptionPok
     */
    public function __construct($no_fichePokemon, $nomPok, $descriptionPok)
    {
        $this->no = $no_fichePokemon;
        $this->nom = $nomPok;
        $this->description = $descriptionPok;
    }

    /**
     * @return array
     */
    public static function getAllFichePok()
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT * FROM fichePokemon";
        $param = array();
        $brutResults = $db->selectQuery($SQL, $param);
        $tabFichePok = array();
        for ($i = 0; $i < count($brutResults); $i++) {
            $tabFichePok[] = self::arrayToObject($brutResults[$i]);
        }

        return $tabFichePok;

    }

    /**
     * @return mixed
     */
    public static function countFichePokemon()
    {
        $db = new db(unserialize(TBCONF));
        $SQL = "SELECT MAX(fichepokemon.no) FROM fichepokemon ";

        $brutResults = $db->selectQuery($SQL, array());

        $max = $brutResults[0];
        //var_dump($max [0]);
        return $max[0];
    }


    /**
     * @param $tabFichePok
     * @return FichePokemon
     */
    private static function arrayToObject($tabFichePok)
    {

        return new FichePokemon($tabFichePok['no'], $tabFichePok['nom'], $tabFichePok['description']);
    }
}