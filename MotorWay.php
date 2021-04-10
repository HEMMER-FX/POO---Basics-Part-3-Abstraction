<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane=4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if($vehicle instanceof Bicycle)
        {
            echo "You'r note allowed here";
        }else{
            $this->currentVehicles[] = $vehicle;
        }
    }
}