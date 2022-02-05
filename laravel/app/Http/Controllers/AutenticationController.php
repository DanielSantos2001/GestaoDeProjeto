<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Session as FacadesSession;

class AutenticationController extends Controller
{
    public function inspect()
    { //basicamente é para verificar se existe conta já com login iniciado ou não para enviar para a pagina inicial
        if (FacadesSession::get('id')!= null && FacadesSession::get('id') > 0) {
            return view('main');
        } else {
            return view('autenticacao.log');
        }
    }

    public function login()
    {
        return view('autenticacao.log');
    }

    public function logout(){
        FacadesSession::flush();
        return redirect()->route('login');
    }

    public function firstTime()
    {
        return view('autenticacao.linkWarning');
    }

    public function registerstudent()
    {
        return view('autenticacao.registerstudent');
    }

    public function createAccCompany(Request $request)
    {
        $user = new User;
        $hashpass = md5($request->userpass);
        $user->USER_NAME = $request->username;
        $user->USER_MAIL = $request->email;
        $user->USER_PWD = $hashpass;

        $user->USER_COURSE = "";
        $user->USER_TYPE = "empresa";
        $user->USER_ADDRESS = $request->useraddress;
        $user->USER_CONTACT = $request->usercontact;
        $user->USER_ADMIN = 0;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 0;

        $user->save();

        return redirect("/")->with('msg', 'Registo criado com sucesso!');
    }

    public function createAccStudent(Request $request)
    {
        $user = new User;
        $hashpass = md5($request->userpass);

        $user->USER_NAME = $request->username;
        $user->USER_MAIL = $request->email;
        $user->USER_PWD = $hashpass;
        $user->USER_COURSE = "";
        $user->USER_TYPE = "estudante";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 0;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 0;


        $user->save();

        return redirect("/")->with('msg', 'Registo criado com sucesso!');
    }

    public function createAccAdmin(Request $request)
    {
        $user = new User;
        $hashpass = md5($request->userpass);

        $user->USER_NAME = $request->username;
        $user->USER_MAIL = $request->email;
        $user->USER_PWD = $hashpass;
        $user->USER_COURSE = "";
        $user->USER_TYPE = "admin";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 0;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 0;


        $user->save();

        return redirect("/")->with('msg', 'Registo criado com sucesso!');
    }

    public function createAccAdminDocente(Request $request)
    {
        $user = new User;
        $hashpass = md5($request->userpass);

        $user->USER_NAME = $request->username;
        $user->USER_MAIL = $request->email;
        $user->USER_PWD = $hashpass;
        $user->USER_COURSE = $request->usercourse;
        $user->USER_TYPE = "admindocente";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 0;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 0;


        $user->save();

        return redirect("/")->with('msg', 'Registo criado com sucesso!');
    }

    public function registercompany()
    {
        return view('autenticacao.registercompany');
    }

    public function registerpage()
    {
        return view('autenticacao.registerpage');
    }

    public function registeradmin()
    {
        return view('autenticacao.registeradmin');
    }

    public function registerconfirm(Request $request)
    {
        
        $user = new User;

        $user->USER_NAME = $request->pessNome;
        $user->USER_MAIL = $request->pessEmail;
        $user->USER_PWD = $request->passwd;
        if ($request->typeUser == "student") {
            if(!str_contains($request->pessEmail, '@alunos.estgoh.ipc.pt')){
                return view('/autenticacao.registerstudent')->with('msgmail', 'Email de aluno tem de ser institucional');
            }
            $user->USER_COURSE = $request->chosenCourse;
            $user->USER_TYPE = "estudante";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } else if($request->typeUser == "empresa"){
            $user->USER_COURSE = "";
            $user->USER_TYPE = "empresa";
            $user->USER_ADDRESS = $request->address;
            $user->USER_CONTACT = $request->contact;
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } else if($request->typeUser == "admin"){
            $user->USER_COURSE = "";
            $user->USER_TYPE = "admin";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } 
        else if($request->typeUser == "admindocente"){
            $user->USER_COURSE =  $request->cursoInput;
            $user->USER_TYPE = "admindocente";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } 


        return view("/autenticacao.registerconfirm", ['user' => $user]);
    }

    public function autentication(Request $request)
    {

        $user = User::where('USER_MAIL', $request->username)->first();
        $hashpass = md5($request->password);

        if ($user != null) {
            if ($user->USER_MAIL == $request->username && $user->USER_PWD == $hashpass) {
                FacadesSession::put('id', $user->USER_ID);
                FacadesSession::put('username', $user->USER_NAME);
                FacadesSession::put('useradmin', $user->USER_ADMIN);
                FacadesSession::put('usermail', $user->USER_MAIL);
                FacadesSession::put('usertype', $user->USER_TYPE);
                FacadesSession::put('userfinalist', $user->USER_FPERM);
                FacadesSession::put('usercourse', $user->USER_COURSE);

                return redirect("/main");
            } else {
                return redirect("/")->with('msg', 'Erro no Login, tente novamente!');
            }
        } else {
            return redirect("/")->with('msg', 'Erro no Login, tente novamente!');
        }
    }

    public function index()
    {
        return view('main');
    }

    public function termandconditions(){
        return view("autenticacao.termandconditions");
    }
}
