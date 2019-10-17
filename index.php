<?php
require_once 'classes.php';


$bmx = new Bike(2, 40);
$peugeot2008 = new Car(4, 100);
$hawk = new Skateboard(4, 10);

//Test on the car
var_dump($peugeot2008);
echo $peugeot2008->SwitchOff(30);
echo $peugeot2008->SwitchOn(100);

//Test on the bike
var_dump($bmx);
echo $bmx->SwitchOn(100);
echo $bmx->SwitchOff(5);

//Test on the skateboard
var_dump($hawk);