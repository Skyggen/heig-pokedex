<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 30.05.2018
 * Time: 17:51
 */


class GameCtrl extends Ctrl
{
    public  function displayPokedex()
    {



        //var_dump(Dresseurs::getAllDresseurs());
        //var_dump(FichePokemon::getAllFichePok());

       // var_dump(Pokemon::getAllPokInf());

        var_dump(Pokemon::getPokCapFromDresseur());
          //  $this::getPokCapFromDresseur("tabPok", $tabPok);
      //  $this->getTPL()->getPokCapFromDresseur("tabPok", $pok );

       // $this->getTPL()->assign('pokemons',$data);
        $this->getTPL()->display('pokedex.tpl');

    }
}