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

    public static function buscarUtil($id)
    {
        $user = User::where('USER_ID', $id)->first();

        return $user->USER_NAME;
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

    public function alterarPassword()
    {
        return view('users.commonFile.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $user = User::where('USER_ID', Session::get('id'))->first();

        $hashpass = md5($request->passwordOriginal);

        if (
            $hashpass == $user->USER_PWD && $request->novaPassword == $request->confirmacaoPassword
            && $request->passwordOriginal !== $request->novaPassword
        ) {

            $user->USER_PWD = md5($request->novaPassword);
            $user->update();

            return redirect("/main/perfil")->with('msg', 'Palavra-Chave atualizada com sucesso!');
        } else {
            return redirect("/main/perfil/changepassword")->with('msg', 'Palavra-Chave invalida!');
        }
    }

    public static function cursoExtenso($c)
    {
        $course = [
            'LSTI' => 'Licenciatura em Sistemas e Tecnologias da Informação',
            'LEI' => 'Licenciatura de Engenharia Informatica',
            'LM' => 'Licenciatura em Marketing',
            'LGB' => 'Licenciatura de Gestão em Bioindústria',
            'LG' => 'Licenciatura em Gestão',
            'LCA' => 'Licenciatura em Contabilidade e Administração',
            'LDROT' => 'Licenciatura em Desenvolvimento Regional e Ordenamento do Território',
            'LII' => 'Licenciatura de Informática Industrial'
        ];

        return $course[$c];
    }

    public function createDocente()
    {
        return view('users/admin/createTeacher');
    }

    public function createNDocente()
    {
        return view('users/admin/createNonTeacher');
    }
}
