<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class PageController extends Controller
{
    public function verPerfil()
    {
        $user = User::where('USER_ID', Session::get('id'))->first();

        return view('users.commonFile.personalInfo', ['user' => $user]);
    }


    public function definirPagina()
    {
        if (Session::get('usertype') == 'estudante') {
            return view('users.student.index');
        } elseif (Session::get('usertype') == 'docente') {
            return view('users.teacher.index');
        } elseif (Session::get('usertype') == 'empresa') {
            return view('users.business.index');
        }

        if (Session::get('useradmin')) {
            return view('users.admin.index');
        }
    }
}
