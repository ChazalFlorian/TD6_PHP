<?php
namespace Model;

class Trainer extends User{

    protected $Pokemons;

    function  addPokemon(Pokemon $pokemon){
        $this->Pokemons[] = $pokemon;
    }

    function getPokemons(){
        return $this->Pokemons;
    }



}

?>