<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index(){
        return view('welcome');
    }

    
}
