<?php

require_once 'Vehicle.php';
require_once 'SwitchLight.php';

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
