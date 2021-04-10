<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 50 ;
        $this->maxSpeed = 50;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if($vehicle instanceof Vehicle)
        {
            $this->currentVehicles[] = $vehicle;
        }else{
            echo "You cant drive";
        }
    }
}