<?php

require_once "Car.php";

$car = new Car("Toyota", "1234-LOL", "Diesel", 120);
echo "The {$car->getBrand()} goes {$car->boost()}";