<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if($vehicle instanceof Bicycle)
        {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo "You'r not allowed here";
        }
    }
}
