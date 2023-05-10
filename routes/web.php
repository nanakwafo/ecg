<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MeterController;
use Illuminate\Support\Facades\Route;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
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
Route::get('/home', function () {
    return view('home');

});

Route::get('/register', [RegistrationController::class,'register']);
Route::post('/register', [RegistrationController::class,'postregister']);
Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class,'postlogin']);
Route::post('/logout', [LoginController::class,'postlogout']);
Route::get('/welcome', [WelcomeController::class,'welcome']);
Route::get('/newmeter', [MeterController::class,'newmeter']);
Route::post('/newmeter', [MeterController::class,'postnewmeter']);


