<?php
require_once('autoload.php');

use Model\Pokemon;
use Model\Battle;
use Model\Trainer;

$Ash = new Trainer("Abitbol","Ash");
$Regis = new Trainer("CDV","Regis");

$Arena = new Battle();

$Bulbizarre = new Pokemon("plant","Bulbizarre");
$Salameche = new Pokemon("fire","Salameche");

$Reptincel = new Pokemon("fire","Reptincel");
$Carabaffe = new Pokemon("water","Carabaffe");

$Florizarre = new Pokemon("plant","Florizarre");
$Tortank = new Pokemon("water","Tortank");

$Ash->addPokemon($Bulbizarre);
$Bulbizarre->setTrainer($Ash);
$Ash->addPokemon($Reptincel);
$Reptincel->setTrainer($Ash);
$Ash->addPokemon($Tortank);
$Tortank->setTrainer($Ash);

$Regis->addPokemon($Salameche);
$Salameche->setTrainer($Regis);
$Regis->addPokemon($Carabaffe);
$Carabaffe->setTrainer($Regis);
$Regis->addPokemon($Florizarre);
$Florizarre->setTrainer($Regis);

//Bataille!!

//Chaque pokemon du dresseur 1 affronte un Pokemon du dresseur 2
//Genere 9 combats
foreach($Ash->getPokemons() as $pokemon1){
    foreach($Regis->getPokemons() as $pokemon2){
        //$i sert de compteur de tour
        $i=0;
        //A la mort d'un des pokemon, le combat s'arrete
        while($Arena->check_Dead($pokemon1) == false && $Arena->check_Dead($pokemon2) == false){
            //Echo statuts
            echo $pokemon1->getName();
            echo "<br>";
            echo $pokemon1->getHP();
            echo "<br><br>";
            echo $pokemon2->getName();
            echo "<br>";
            echo $pokemon2->getHP();
            echo "<br><br><br>";
            //choix du tour
            if($i % 2 === 0){
                echo $pokemon1->getName()." attaque ".$pokemon2->getName()."<br>";
                $Arena->attack($pokemon1,$pokemon2);
            }else{
                echo $pokemon2->getName()." attaque ".$pokemon1->getName()."<br>";
                $Arena->attack($pokemon2,$pokemon1);
            }
            if($Arena->check_Dead($pokemon1) != false){
                echo $Arena->check_Dead($pokemon1);
            }elseif($Arena->check_Dead($pokemon2) != false){
                echo $Arena->check_Dead($pokemon1);
            }else{

            }
            $i++;
        }
    }
}

?>