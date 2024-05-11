<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{
    //


    public function index(){
        //QueryBuilder
        $bikes = DB::table('bikes')->get();

        return view('bike',['bikes'=>$bikes]);
    }
}
