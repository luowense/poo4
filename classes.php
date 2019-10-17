<?php
require_once 'interface.php';

//Definition of the Vehicle Abstract Class

abstract class Vehicle {
    private $wheels;
    private $speed;

    public function __construct($wheels, $speed)
    {
        $this->wheels = $wheels;
        $this->speed = $speed;
    }

    public function getWheels(){
        return $this->wheels;
    }

    public function getSpeed(){
        return $this->speed;
    }
}

//Definition of the Bike Class

class Bike extends Vehicle implements SwitchLight{

    public function __construct($wheels, $speed)
    {
        parent::__construct($wheels, $speed);
    }

    public function SwitchOff($speed)
    {
        if($speed < 10){
            return false;
        }
        else {
            return true;
        }
    }

    public function SwitchOn($speed)
    {
        if($speed > 10){
            return true;
        }
        else {
            return false;
        }
    }
}

//Definition of the Car Class

class Car extends Vehicle implements SwitchLight{

    public function __construct($wheels, $speed)
    {
        parent::__construct($wheels, $speed);
    }

    public function SwitchOff($speed)
    {
        return false;
    }

    public function SwitchOn($speed)
    {
        return true;
    }
}

//Skateboard class without interface implementation

class Skateboard extends Vehicle{

    public function __construct($wheels, $speed)
    {
        parent::__construct($wheels, $speed);
    }
}