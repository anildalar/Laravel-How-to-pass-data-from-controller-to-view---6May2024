<?php

// Import area
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CityController; //Statement
use App\Http\Controllers\CarController; //Statement
use App\Http\Controllers\BikeController; //Statement
use App\Http\Controllers\CricketPlayerController; //Statement
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\NewsController;


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

Route::prefix('mp')->group(function () {
    Route::get('/neemuch', function () {
        // Matches The "/admin/users" URL
        return view('mp.neemuch');
    });
    Route::get('/indore', function () {
        // Matches The "/admin/users" URL
        return view('mp.indore');
    });
    Route::get('/bhopal', function () {
        // Matches The "/admin/users" URL
        return 'Hello from bhopal route';
    });
});

Route::prefix('rj')->group(function () {
    Route::get('/jaipur', [CityController::class,'jaipur']);
    Route::get('/udaipur', [CityController::class,'udaipur']);


   /*  Route::get('/indore', function () {
        // Matches The "/admin/users" URL
        return view('mp.indore');
    });
    Route::get('/bhopal', function () {
        // Matches The "/admin/users" URL
        return 'Hello from bhopal route';
    }); */
});

// ClassName::method() Scope Resolution Opearator
Route::get('/mycars',[CarController::class,'index']);
Route::get('/mybikes',[BikeController::class,'index']);


//Class::method()

// :: is a scope resolution operation

Route::get('/cricketplayers',[CricketPlayerController::class,'index']);


Route::resource('laptops', LaptopController::class);

Route::resource('news',NewsController::class);