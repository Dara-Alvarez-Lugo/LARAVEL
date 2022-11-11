<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home');


// Usuario

Route::middleware(['auth'])->group(function(){

    // Usuario
    Route::get('/users', [UserController::class,'index']);
    Route::get('/users/create', [UserController::class,'create']);
    Route::get('/users/{id}', [UserController::class,'show']);
    Route::post('/users', [UserController::class,'store']);
    
    Route::put('/users', [UserController::class,'update']);

});



// Cliente
Route::get('/clients', [ClientController::class,'index']);
Route::get('/clients/create', [ClientController::class,'create']);
Route::get('/clients/{id}', [ClientController::class,'show']);
Route::post('/clients', [ClientController::class,'store']);





// Route::get('/saludo', function(){
//     return "Hola";
// });

// Route::get('/saludo/{name}', function($name){
//     return "Hola ".$name;
// });

// Route::get('/suma/{num1}/{num2}', function($num1,$num2){
//     return $num1+$num2;
// })->where('num1','[0-9]+')->where('num2','[0-9]+');

// Route::get('/suma/{num1}/{num2}', function($num1,$num2){
//     return $num1+$num2;

// })->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);


// Route::get('/multi/{num1}/{num2}/{num3?}', function($num1,$num2,$num3 = 1){
//     return $num1*$num2*$num3;

// })->where(['num1' => '[0-9]+', 'num2' => '[0-9]+', 'num3' => '[0-9]+']);