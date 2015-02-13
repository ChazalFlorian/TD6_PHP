<?php
namespace Model;

class Battle{

    const DAMAGE_MAJOR = 1.5;
    const DAMAGE_MINOR = 2;

    function attack(Pokemon $pokemonAttacker, Pokemon $pokemonDefender){
        if($pokemonAttacker->getType() == $pokemonAttacker::TYPE_FIRE && $pokemonDefender->getType() == $pokemonDefender::TYPE_PLANT){
            $pokemonDefender->removeHP(rand(10,20)*self::DAMAGE_MAJOR);
        }elseif($pokemonAttacker->getType() == $pokemonAttacker::TYPE_FIRE && $pokemonDefender->getType() == $pokemonDefender::TYPE_WATER){
            $pokemonDefender->removeHP(rand(10,20)/self::DAMAGE_MINOR);
        }else{
            $pokemonDefender->removeHP(rand(10,20));
        }
    }

    function check_Dead(Pokemon $pokemon){
        if($pokemon->getHP() <= 0){
            return "<b>Perdant: </b>".$pokemon->getTrainer()->getName()."<br><br><br><br>";
        }else{
            return false;
        }
    }

}

?>