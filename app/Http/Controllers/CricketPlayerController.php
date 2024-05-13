<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CricketPlayer;

class CricketPlayerController extends Controller
{
    //1. Property


    //2. Constructor


    //3. Method
    public function index(){
        //Every method return something
        //Get the data from Model
        //Class::method()
        $players=CricketPlayer::all();
        return view('cricketplayer',compact('players')); //cricketplayer.blade.php
    }
}
