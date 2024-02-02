<?php


namespace App\Helpers;
use App\Models\Car as CarModel;


class GasCar extends Car
{

    public $type,$fuelEfficiency;

    public function __construct($type,$name, $model, $year, $fuelEfficiency) {
        parent::__construct($name, $model, $year);
        $this->type = $type;
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function displayCarInformation() {
        $id = parent::displayCarInformation();
        $car = CarModel::find($id);
        $car->type = $this->type;
        $car->energy = $this->fuelEfficiency;
        $car->save();
    }

}
