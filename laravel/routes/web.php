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

Route::get('/login', [AutenticationController::class, 'login'])->name('login');
Route::get('/logout', [AutenticationController::class, 'logout']);

Route::get('/firstTime', [AutenticationController::class, 'firstTime']);


Route::get('/main', [AutenticationController::class, 'index']);


Route::post('/registerstudent', [AutenticationController::class, 'registerstudent']);

Route::post('/registerpage', [AutenticationController::class, 'registerpage']);

Route::get('/registeradmin', [AutenticationController::class, 'registeradmin']);

Route::post('/users.create.acccompany', [AutenticationController::class, 'createAccCompany']);
Route::post('/users.create.accstudent', [AutenticationController::class, 'createAccStudent']);
Route::post('/users.create.accadmin', [AutenticationController::class, 'createAccAdmin']);
Route::post('/users.create.accadmindocente', [AutenticationController::class, 'createAccAdminDocente']);
Route::post('/registerconfirm', [AutenticationController::class, 'registerconfirm']);

Route::post('/registercompany', [AutenticationController::class, 'registercompany']);

Route::post('/loginAuth', [AutenticationController::class, 'autentication']);

Route::get('/termandconditions', [AutenticationController::class, 'termandconditions']);


