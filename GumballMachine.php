<?php

class GumballMachine{

    private $gumballs;

    // get the amount of gumballs still in the machine

    public function getGumballs(){
        return $this->gumballs;
    }

    // set the amount of gumballs in the machine

    public function setGumballs($amount){
       $this->gumballs = $amount;
    }


    //  THe user turns the wheel, machine dispenses gumball!

    public function turnWheel(){
        $this->setGumballs($this->getGumballs() - 1);
    }



}





?>