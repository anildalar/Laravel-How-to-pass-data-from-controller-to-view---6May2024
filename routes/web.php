<?php

// Import area
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//ClassName::method(ActualArg1,ActualArg2)
//ClassName::method('string',cbfn) Callback function
Route::get('/anil', function () { 
    $data = ['name'=>'Sunil','surname'=>'Dollor']; // Associative Array ['key'=>'value']
    return view('anil',$data);
});

Route::get('/sunil',[StudentController::class,'sunil']);

