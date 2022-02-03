<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\PageController;

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

Route::get('/main', [PageController::class, 'definirPagina']);

Route::get('/registerstudent', [AutenticationController::class, 'registerstudent']);

Route::get('/registerpage', [AutenticationController::class, 'registerpage']);

Route::post('/users.create.acccompany', [AutenticationController::class, 'createAccCompany']);
Route::post('/users.create.accstudent', [AutenticationController::class, 'createAccStudent']);
Route::post('/registerconfirm', [AutenticationController::class, 'registerconfirm']);

Route::get('/registercompany', [AutenticationController::class, 'registercompany']);

Route::post('/loginAuth', [AutenticationController::class, 'autentication']);

use App\Http\Controllers\ProposalController;

//Route::get('/', [ProposalController::class, 'index']);


Route::get('/proposals/createProposal', [ProposalController::class, 'create']);

Route::get('/proposals/createProposal', function () {
   return view('/proposals/createProposal');
});

Route::post('/proposals', [ProposalController::class, 'store']);
Route::post('/loginAuth', [AutenticationController::class, 'autentication']);
