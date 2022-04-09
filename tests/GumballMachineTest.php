<?php 

    require 'GumballMachine.php';


    class GumballMachineTest extends \PHPUnit\Framework\TestCase{

        public $gumballMachineInstance;

        public function setMachineUp(){
            $this->gumballMachineInstance = new GumballMachine();
        }


        public function testIfWheelWorks(){
            
            $this->setMachineUp();

            //  Suppose we have 100 gumballs...
            $this->gumballMachineInstance->setGumballs(100);

            //  .. and we turn the wheel once...
            $this->gumballMachineInstance->turnWheel();

            // ... we should now have 99 gumballs remaining in the machine right ?.
            $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());

        }




        
    }







?>