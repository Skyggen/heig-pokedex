<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:51
 */


class GameCtrl extends Ctrl
{
    public function displayPokedex()
    {
        //var_dump(Dresseurs::getAllDresseurs());
        //var_dump(FichePokemon::getAllFichePok());

        // var_dump(Pokemon::getAllPokInf());

        // var_dump(Pokemon::getPokCapFromDresseur());


        //  var_dump(Pokemon::findPokemon());
        //  $this::getPokCapFromDresseur("tabPok", $tabPok);
        //  $this->getTPL()->getPokCapFromDresseur("tabPok", $pok );
        $rndPokemon = Pokemon::rndPokemon();
        // $this->getTPL()->assign('pokemons',$data);
        //$tabPok = Pokemon::findPokemon();
        $this->getTPL()->assign('rndPok', $rndPokemon);
        $this->getTPL()->assign("tabPok", null);
        $this->getTPL()->display('pokedex.tpl');
    }

    public function catchPokemon($idPokemon)
    {
        $idDresseur = 0; //TODO : obtenir l id du dressuer par son pseudo
        Pokemon::addToPokedex($idPokemon, $idDresseur);
    }

}