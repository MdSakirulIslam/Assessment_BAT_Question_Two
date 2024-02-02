<?php

namespace App\Http\Controllers;

use App\Helpers\ElectricCar;
use App\Helpers\GasCar;
use App\Models\Car;
use DataTables;
use Illuminate\Http\Request;

class CarController extends Controller {

    /*
     * Show car information
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request ) {

        # Ajax request
        if ( $request->ajax() ) {
            $data = Car::select( '*' );
            return Datatables::of( $data )
                ->make( true );
        }

        return view( 'car.index' );
    }

    /*
     * show create form for add new car
     */
    public function create() {
        return view( 'car.add' );
    }

    /*
     * Store car information into the database
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {

        # Assign value to new variables for double use
        $name                   = $request->name;
        $type                   = $request->energy;
        $model                  = $request->model;
        $year                   = $request->year;
        $capacity_or_efficiency = $request->capacity_or_efficiency;

        # check the car is electric or gas
        if ( $request->energy == 'electric' ) {

            # Send data to the electric car
            $electricCar = new ElectricCar( $type, $name, $model, $year, $capacity_or_efficiency );
            $electricCar->displayCarInformation();

            return redirect()->route( 'car.index' );

        } else if ( $request->energy == 'gas' ) {

            # Send data to the gas car
            $electricCar = new GasCar( $type, $model, $model, $year, $capacity_or_efficiency );
            $electricCar->displayCarInformation();

            return redirect()->route( 'car.index' );
        }

    }

}
