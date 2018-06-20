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
        $rndPokemon = Pokemon::rndPokemon();
        $idDresseur = Dresseurs::getDresseurId($_SESSION["pseudo"]);
        $tabPokCap = Pokemon::getPokCapFromDresseur($idDresseur);
        $this->getTPL()->assign('rndPok', $rndPokemon);
        $this->getTPL()->assign("tabPok", $tabPokCap);
        $this->getTPL()->display('pokedex.tpl');
    }

    public function catchPokemon($idPokemon)
    {
        $idDresseur = Dresseurs::getDresseurId($_SESSION["pseudo"]);
        Pokemon::addToPokedex($idDresseur, $idPokemon);
        header('Location: game.php');
    }

}