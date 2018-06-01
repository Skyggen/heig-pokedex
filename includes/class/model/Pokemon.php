<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:59
 */

class Pokemon
{
    private $noPokemon, $nivPokemon, $sexe, $no_fichePokemon;

    public function __construct($noPokemon,$nom,$description,$type, $nivPokemon, $sexe, $no_fichePokemon)
    {
        $this->noPokemon = $noPokemon;
        $this->nivPokemon = $nivPokemon;
        $this->sexe = $sexe;
        $this->no_fichePokemon = $no_fichePokemon;
    }

    public static function getAllPokemons(){
        $pokemons = array();
        // get data from db
        // convert data to object array user
        $pokemons[]= new Pokemon(1,23,"male",1);
        return  $pokemons; //  va chercher tous les user dans la db
    }
}