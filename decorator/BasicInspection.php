<?php
/**
 * Created by PhpStorm.
 * User: kervi
 * Date: 2/27/2018
 * Time: 8:39 PM
 */

interface CarService{
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService {
    public function getCost()
    {
       return 25;
    }

    public function getDescription()
    {
        return "Basic Inspection";
    }
}

class OilChange implements CarService {
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription().', and oil change';
    }
}

class TireRotation implements CarService {
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription().', and a tire rotation';
    }
}

$service = new OilChange(new BasicInspection());

echo $service->getCost();