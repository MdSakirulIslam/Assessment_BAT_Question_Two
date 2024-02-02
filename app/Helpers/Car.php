<?php


namespace App\Helpers;

use Illuminate\Support\Facades\DB;


class Car
{
    private $name;
    private $model;
    private $year;

    public function __construct($name, $model, $year)
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;

    }
    public function displayCarInformation() {
        $arr =[
            'name'=>$this->name,
            'model'=>$this->model,
            'year'=>$this->year
        ];

       return DB::table('cars')->insertGetId($arr);

        // echo "{$this->year} {$this->name} {$this->model}\n";
    }
}
