<?php

require_once "Turbo.php";

class Car
{
    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $maxSpeed;

    use Turbo;

    public function __construct($brand, $licensePlate, $fuelType, $maxSpeed)
    {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
}
