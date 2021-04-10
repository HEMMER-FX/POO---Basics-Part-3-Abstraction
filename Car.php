<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected string $energy;
    protected int $energyLevel;

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);

    }

    public function start():bool
    {
        return $this->energyLevel > 0;

    }
    public function changeWheel(): void
    {
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}