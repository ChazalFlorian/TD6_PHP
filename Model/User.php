<?php
namespace Model;

abstract class User{
    protected  $name;
    protected  $firstName;


    function __construct($name, $firstName){
        $this->name = $name;
        $this->firstName = $firstName;
    }

    protected function setName($name){
        $this->name = $name;
    }

    protected function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getName(){
        return $this->name;
    }

    protected function getFirstName(){
        return $this->firstName;
    }
}

?>