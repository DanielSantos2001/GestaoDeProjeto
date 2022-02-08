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

Route::get('/login', [AutenticationController::class, 'login'])->name('login');
Route::get('/logout', [AutenticationController::class, 'logout']);

Route::get('/firstTime', [AutenticationController::class, 'firstTime']);

Route::get('/main', [PageController::class, 'definirPagina']);

Route::post('/registerstudent', [AutenticationController::class, 'registerstudent']);

Route::post('/registerpage', [AutenticationController::class, 'registerpage']);

Route::get('/registeradmin', [AutenticationController::class, 'registeradmin']);

Route::post('/users.create.acccompany', [AutenticationController::class, 'createAccCompany']);
Route::post('/users.create.accstudent', [AutenticationController::class, 'createAccStudent']);
Route::post('/registerconfirm', [AutenticationController::class, 'registerconfirm']);

Route::post('/registercompany', [AutenticationController::class, 'registercompany']);

Route::post('/loginAuth', [AutenticationController::class, 'autentication']);

use App\Http\Controllers\ProposalController;

//Route::get('/', [ProposalController::class, 'index']);


Route::get('/proposals/proposalDetails/{id}', [ProposalController::class, 'details']);

Route::get('/proposals/createProposal', [ProposalController::class, 'create']);

Route::get('/proposals/createProposal', function () {
   return view('/proposals/createProposal');
});

Route::get('/proposals/createProposal1', function () {
   return view('/proposals/createProposalNew');
});

Route::post('/proposals', [ProposalController::class, 'store']);
Route::post('/loginAuth', [AutenticationController::class, 'autentication']);

route::post('/proposals/proposalDetails/{id}', [ProposalController::class, 'proposalApprove']);
route::post('/proposals/proposalDetails/{id}/r', [ProposalController::class, 'proposalReject']);
