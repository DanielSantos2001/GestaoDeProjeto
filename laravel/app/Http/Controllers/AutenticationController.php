<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AutenticationController extends Controller
{
    public function inspect(){ //basicamente é para verificar se existe conta já com login iniciado ou não para enviar para a pagina inicial
        if(true){
            return view('autenticacao.log');
        }else{
            return view('welcome');
        }
        
    }

    public function login(){
        return view('autenticacao.log');
    }

    public function firstTime(){
        return view('autenticacao.linkWarning');
    }

    public function registerstudent(){
        return view('autenticacao.registerstudent');
    }

    public function createAcc(Request $request){
        $user = new User;
        
        $user->USER_NAME = $request->USER_NAME;
        $user->USER_MAIL = $request->USER_MAIL;
        $user->USER_PWD = $request->USER_PWD;
        if($request->USER_TYPE == "estudante"){
            $user->USER_COURSE = $request->USER_COURSE;
            $user->USER_TYPE = "estudante";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        }else{
            $user->USER_COURSE = "";
            $user->USER_TYPE = "empresa";
            $user->USER_ADDRESS = $request->USER_ADDRESS;
            $user->USER_CONTACT = $request->USER_CONTACT;
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        }

        $user->save();
        return redirect("/");
    }

    public function registercompany(){
        return view('autenticacao.registercompany');
    }

    public function registerconfirm(Request $request){
        $user = new User;
        
        $user->USER_NAME = $request->pessNome;
        $user->USER_MAIL = $request->pessEmail;
        $user->USER_PWD = $request->passwd;
        if($request->typeUser == "student"){
            $user->USER_COURSE = $request->chosenCourse;
            $user->USER_TYPE = "estudante";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        }else{
            $user->USER_COURSE = "";
            $user->USER_TYPE = "empresa";
            $user->USER_ADDRESS = $request->address;
            $user->USER_CONTACT = $request->contact;
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        }
        

        return view("/autenticacao.registerconfirm", ['user' => $user]);

    }

    public function index(){
        return view('welcome');
    }

   

    
}
