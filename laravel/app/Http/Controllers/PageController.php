<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use SebastianBergmann\Environment\Console;

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


    public function registoconta()
    {
        $empresas = User::where('USER_TYPE', 'empresa')->get();

        return view('users/admin/registoconta', ['empresas' => $empresas]);
    }

    public function registocontadetails(Request $request)
    {
        $empresas = User::where('USER_ID', $request->idEmpresa)->first();

        return view('users/admin/registocontadetails', ['empresas' => $empresas]);
    }

    public function registocontachange(Request $request)
    {
        $empresas = User::where('USER_ID', $request->id)->first();

        if ($request->value == 1) {
            $empresas->USER_STATE = 1;
            $empresas->update();
            return redirect('/registoconta');
        } elseif ($request->value == 0) {
            $empresas->delete();
            return redirect('/registoconta');
        }
    }

    public function listarDocentesENDocentes()
    {
        $list = User::whereIn('USER_TYPE', ['docente', 'ndocente'])->get();

        return view('users/admin/gestaoconta', ['list' => $list]);
    }

    public function gestaocontadetails(Request $request)
    {
        $user = User::where('USER_ID', $request->iddocente)->first();

        return view('users/admin/gestaocontadetails', ['user' => $user]);
    }

    public function simNaoAdmin(Request $request)
    {

        $var = User::where('USER_ID', $request->id)->first();

        if ($request->valoralterado == 1) {
            $var->USER_ADMIN = 1;
            $var->update();
            return redirect('/gestaoconta');
        } else if ($request->valoralterado == 0) {
            $var->USER_ADMIN = 0;
            $var->update();
            return redirect('/gestaoconta');
        }
    }

    public function estadoDocente(Request $request)
    {

        $var = User::where('USER_ID', $request->id)->first();

        if ($request->valoralterado == 0) {
            $var->USER_STATE = 0;
            $var->update();
            return redirect('/gestaoconta');
        } elseif ($request->valoralterado == 1) {
            $var->USER_STATE = 1;
            $var->update();
            return redirect('/gestaoconta');
        }
    }

    public function premissaostudent()
    {
        $student = User::where('USER_TYPE', 'estudante')->get();

        return view('users/admin/premissaostudent', ['student' => $student]);
    }


    public function estadoEstudante(Request $request)
    {

        $user = User::where('USER_ID', $request->id)->first();

        if ($request->valoralterado == 1) {
            $user->USER_STATE = 1;
            $user->update();
            return redirect('/premissaostudent');
        } else {
            $user->USER_STATE = 0;
            $user->update();
            return redirect('/premissaostudent');
        }
    }
}
