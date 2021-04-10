<?php
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$socaltra = new Truck("black", 3, 90);

$rockrider = new Bicycle('red',15,1,2);
$socaltra = new Truck( 19, 'blue', 2, 'fuel');
$audi = new car ('blue', 2);

$a4 = new MotorWay();
$d230 = new ResidentialWay();
$cyclePist = new PedestrianWay();

$a4->addVehicle($socaltra);
$a4->addVehicle($audi);
$a4->addVehicle($rockrider);
var_dump($a4);

$dep215->addVehicle($socaltra);
$dep215->addVehicle($audi);
$dep215->addVehicle($rockrider);
var_dump($dep215);

$cycle->addVehicle($socaltra);
$cycle->addVehicle($audi);
$cycle->addVehicle($rockrider);
var_dump($cycle);


echo $socaltra->forward();
echo $socaltra->brake();
echo "<br>";

$rockruder = new Bicycle("red",3);
echo $rockruder->forward();
echo $rockruder->brake();
echo "<br>";

$dacia = new Car("red",3,"fuel");
echo $dacia->forward();
echo $dacia->brake();
echo "<br>";





?>
