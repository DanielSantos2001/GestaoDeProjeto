<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;


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

Route::get('/', [AutenticationController::class, 'inspect']);

Route::get('/login', [AutenticationController::class, 'login']);

Route::get('/firstTime', [AutenticationController::class, 'firstTime']);


Route::get('/welcome', [AutenticationController::class, 'index']);


Route::get('/registerstudent', [AutenticationController::class, 'registerstudent']);
Route::post('/users.create.student', [AutenticationController::class, 'createStudentAcc']);
