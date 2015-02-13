<?php
namespace Model;

class Pokemon{

    protected  $Name;
    protected  $HP;
    protected  $Type;
    protected $Trainer;

    const TYPE_WATER = "water";
    const TYPE_FIRE = "fire";
    const TYPE_PLANT = "plant";

    function __construct($Type, $Name){
        if($Type == self::TYPE_FIRE || $Type == self::TYPE_PLANT || $Type == self::TYPE_WATER){

        }else{
            throw new Exception("Type not exists");
        }
        try{
            $this->Type = $Type;
            $this->Name = $Name;
            $this->HP = 100;
        }catch (Exception $e){
            var_dump($e);
        }
    }


    /**
     * @return string
     */
    function getName(){
        return $this->Name;
    }

    /**
     * @param string $name
     *
     */
    function setName($Name){
        $this->Name = $Name;
    }

    /**
     * @return int
     */
    function getHP(){
        return $this->HP;
    }

    /**
     * @param int $hp
     *
     */
    function setHP($HP){
        $this->HP = $HP;
    }

    /**
     * @param int $hp
     *
     * @return int
     */
    function addHP($add){
        $this->HP += $add;
    }

    /**
     * @param int $hp
     *
     * @return int
     */
    function removeHP($rem){
        $this->HP -= $rem;
    }

    /**
     * @return string
     */
    function getType(){
        return $this->Type;
    }

    function  setTrainer(Trainer $trainer){
        $this->Trainer = $trainer;
    }

    function getTrainer(){
    return $this->Trainer;
    }
}

?>