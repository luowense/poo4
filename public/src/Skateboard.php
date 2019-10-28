<?php

require_once 'Vehicle.php';
require_once 'SwitchLight.php';

//Skateboard class without interface implementation

class Skateboard extends Vehicle{

    public function __construct($wheels, $speed)
    {
        parent::__construct($wheels, $speed);
    }
}