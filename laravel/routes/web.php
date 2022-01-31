<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ProposalController;

Route::get('/', [ProposalController::class, 'index']);


Route::get('/proposals/createProposal', [ProposalController::class, 'create']);

Route::get('/proposals/createProposal', function () {
   return view('/proposals/createProposal');
});

Route::post('/proposals', [ProposalController::class, 'store' ]);
