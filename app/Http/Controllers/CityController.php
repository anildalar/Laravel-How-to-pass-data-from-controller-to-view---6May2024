<?php

//Import Area
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//This is an example single inheritance

// OOPs

//class Child extends Parent {}
class CityController extends Controller
{
    //1. Property
    public $data2 = ['fullname'=>'Rajveer Singh'];


    //2. Constructor


    //3. Method/Function
    public function jaipur(){
        //Local Variable
        $data = ["fullname"=>"Anil Dollor"]; //Associative Array

        //Every function may return something
        return view('rj.jaipur',compact('data'));
    }

    public function udaipur(){
        //Every function may return something
        return view('rj.udaipur')->with($this->data2);
    }


}
