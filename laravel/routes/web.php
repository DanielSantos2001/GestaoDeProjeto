<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\MailController;
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

Route::get('/forgotpassword2', [AutenticationController::class, 'pagemailforgotpass']);
Route::get('/forgotpassword/{md5mail}', [AutenticationController::class, 'forgotpassword']);
Route::post('/submitnewpassLinkMail', [AutenticationController::class, 'submitnewpassLinkMail']);
Route::post('/submitlinkforgotpass', [AutenticationController::class, 'submitlinkforgotpass']);



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
Route::post('/users.create.accadmin', [AutenticationController::class, 'createAccAdmin']);
Route::post('/users.create.accadmindocente', [AutenticationController::class, 'createAccAdminDocente']);
Route::post('/registerconfirm', [AutenticationController::class, 'registerconfirm']);

Route::post('/users.registerconfirm', [AutenticationController::class, 'registerconfirmMain']);

Route::post('/users.create.docente', [AutenticationController::class, 'createAccAdminDocente']);

Route::post('/registercompany', [AutenticationController::class, 'registercompany']);

Route::post('/loginAuth', [AutenticationController::class, 'autentication']);

use App\Http\Controllers\ProposalController;

//Route::get('/', [ProposalController::class, 'index']);
Route::get('/termandconditions', [AutenticationController::class, 'termandconditions']);

Route::get('/confirmlinkstudent/{md5mail}', [AutenticationController::class, 'activateaccstudent']);

Route::get('/proposals/createProposal', function () {
   return view('/proposals/createProposalNew');
});

Route::post('/proposals', [ProposalController::class, 'store']);

Route::post('/detalhes', [ProposalController::class, 'details']);

Route::post('/loginAuth', [AutenticationController::class, 'autentication']);


Route::get('/main/perfil', [PageController::class, 'verPerfil']);

Route::get('/main/perfil/changepassword', [PageController::class, 'alterarPassword']);

route::post('/{id}', [ProposalController::class, 'proposalApprove']);
route::post('/{id}/r', [ProposalController::class, 'proposalReject']);

Route::get('/createDocente', [PageController::class, 'createDocente']);

Route::get('/preview', function () {
   return view('users/admin/gestaocontadetails');
});