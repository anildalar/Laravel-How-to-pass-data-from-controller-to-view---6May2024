<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    //1. Property

    //2. Constructor


    //3. Method
    //Display a listing of the data/resource.
    public function index(){ //index is to list the data on the viewFile
        //Eleqouent ORM
        $cars=Car::all();
        return view('car',compact('cars'));
    }

}
