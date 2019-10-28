<?php

require_once 'Vehicle.php';
require_once 'SwitchLight.php';

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
