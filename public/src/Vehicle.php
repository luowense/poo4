<?php

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