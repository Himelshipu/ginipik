<?php

namespace App\Http\Traits;
use App\Models\Flight;

trait FlightTrait {

    public function index() {
        $flights = Flight::all();
        return view('/')->with(compact('flights'));
    }

}
