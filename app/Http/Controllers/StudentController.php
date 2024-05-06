<?php

// Import Area
namespace App\Http\Controllers;
use Illuminate\Http\Request;


//Class ChildClass extends ParentClass{}
//Class DerivedClass extends BaseClass{}
class StudentController extends Controller
{
    //1. Property


    //2. Constructor


    //3. Method
    public function sunil(){

        $data = ['name'=>'Sunil123','surname'=>'Dollor'];
        return view('sunil',$data);
    }
}



?>