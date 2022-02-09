<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Session as FacadesSession;

use App\Mail\MailSender;
use App\Mail\MailSenderFacade;


class AutenticationController extends Controller
{

    public function inspect()
    { //basicamente é para verificar se existe conta já com login iniciado ou não para enviar para a pagina inicial

        $count = User::count();


        if (FacadesSession::get('id') != null && FacadesSession::get('id') > 0) {
            return view('main');
        } else if ($count === 0) {
            return view("autenticacao.registeradmin");
        } else {
            return view('autenticacao.log');
        }
    }

    public function login()
    {
        return view('autenticacao.log');
    }

    public function logout()
    {
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
        $user->USER_COURSE = $request->usercourse;
        $user->USER_TYPE = "estudante";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 0;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 0;

        $link = "<p>Informamos que foi criada uma conta com este email na plataforma GEA - Gestao de Estagios Academicos</p>
        <br><p>Confirme no link este registo, caso não seja o responsavel por este registo entre em contato conosco e não ative a conta!</p>
        <a href= http://127.0.0.1:8000/confirmlinkstudent/" . md5($request->email) . ">Clique aqui para ativar a sua conta</a>";
        $title = "Registo de Conta";


        $user->save();
        $mail = new MailSender();

        $mail->mail("gp2022grupob@gmail.com", $title, $link); //está a enviar para gp apenas por teste, no primeiro campo será inserido o email $request->email <<<<-------- 

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
        $user->USER_TYPE = "ndocente";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 1;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 1;


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
        $user->USER_TYPE = "docente";
        $user->USER_ADDRESS = "";
        $user->USER_CONTACT = "";
        $user->USER_ADMIN = 1;
        $user->USER_FPERM = 0;
        $user->USER_STATE = 1;


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
        $usermail = User::where('USER_MAIL', $request->pessEmail)->first();
        //verificação de campos vazios de variaveis gerais
        if ($usermail !== null) {
            return redirect("/")->with('msg', 'O Email que inseriu já tem conta!');
        }
        if ($request->typeUser == "student") {
            if (strcmp($request->passwd, $request->checkPasswd) != 0) {
                return view('/autenticacao.registerstudent')->with('msgpass', 'As passwords não coincidem!');
            }
            if (strlen($request->pessNome) == 0 || strlen($request->passwd) == 0) {
                return view('/autenticacao.registerstudent')->with('msgerror', '*Campo Obrigatório');
            }
        }
        if ($request->typeUser == "empresa") {
            if (strcmp($request->passwd, $request->checkPasswd) != 0) {
                return view('/autenticacao.registercompany')->with('msgpass', 'As passwords não coincidem!');
            }
            if (strlen($request->pessNome) == 0 || strlen($request->passwd) == 0) {
                return view('/autenticacao.registercompany')->with('msgerror', '*Campo Obrigatório');
            }
        } else {
            if (strcmp($request->passwd, $request->checkPasswd) != 0) {
                return view('/autenticacao.registeradmin')->with('msgpass', 'As passwords não coincidem!');
            }
            if (strlen($request->pessNome) == 0 || strlen($request->passwd) == 0) {
                return view('/autenticacao.registeradmin')->with('msgerror', '*Campo Obrigatório');
            }
        }
        //fim de verificação de campos vazios de variaveis gerais
        /**Neste caso o utilizador pode tentar utilizar o inspection para enviar algo diferente mas esta condição verifica */
        if ($request->typeUser == "student") { //campos especificos de estudante
            $courses = ["LSTI", "LEI", "LM", "LGB", "LG", "LCA", "LDROT", "LII"];
            for ($i = 0; $i < 8; ++$i) {
                if (strcmp($request->chosenCourse, $courses[$i])) {
                    $value = false;
                    break; //se o curso estiver correto o valor false é dado para na condição de redirecionamento não se concretize
                }
            }
            if ($value) {
                return view('/autenticacao.registerstudent')->with('msgerror', '*Campo Obrigatório');
            }
            //final da condição
            if (!str_contains($request->pessEmail, '@alunos.estgoh.ipc.pt')) { //verifica se o email é institucional no servidor
                return view('/autenticacao.registerstudent')->with('msgmail', 'Email de aluno tem de ser institucional');
            }
            if (strlen($request->chosenCourse) == 0) { //mesmo que na primeira verifique a possibilidade de campo vazio esta opção fica por segunda segurança (layer security)
                return view('/autenticacao.registerstudent')->with('msgerror', '*Campo Obrigatório');
            }
            $user->USER_COURSE = $request->chosenCourse;
            $user->USER_TYPE = "estudante";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } else if ($request->typeUser == "empresa") { //campos especificos de empresa
            if (strlen($request->address) == 0 || strlen($request->contact) == 0) {
                return view('/autenticacao.registercompany')->with('msgerror', '*Campo Obrigatório');
            }
            $user->USER_COURSE = "";
            $user->USER_TYPE = "empresa";
            $user->USER_ADDRESS = $request->address;
            $user->USER_CONTACT = $request->contact;
            $user->USER_ADMIN = 0;
            $user->USER_FPERM = 0;
        } else if ($request->typeUser == "admin") {
            //campos especificos de admin não docente
            $user->USER_COURSE = "";
            $user->USER_TYPE = "admin";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 1;
            $user->USER_FPERM = 0;
        } else if ($request->typeUser == "admindocente") { //campos especificos de admin que é docente
            $courses = ["LSTI", "LEI", "LM", "LGB", "LG", "LCA", "LDROT", "LII"];
            for ($i = 0; $i < 8; ++$i) {
                if (strcmp($request->cursoInput, $courses[$i])) {
                    $value = false;
                    break; //se o curso estiver correto o valor false é dado para na condição de redirecionamento não se concretize
                }
            }
            if ($value) {
                return view('/autenticacao.registeradmin')->with('msgerror', '*Campo Obrigatório');
            }
            $user->USER_COURSE =  $request->cursoInput;
            $user->USER_TYPE = "admindocente";
            $user->USER_ADDRESS = "";
            $user->USER_CONTACT = "";
            $user->USER_ADMIN = 1;
            $user->USER_FPERM = 0;
        }


        return view("/autenticacao.registerconfirm", ['user' => $user]);
    }

    public function autentication(Request $request)
    {

        $user = User::where('USER_MAIL', $request->username)->first();
        $hashpass = md5($request->password);
        
        

        if ($user != null) {
            if($user->USER_STATE == 0){ //se a conta não estiver ativa é direcionado com um aviso de erro comum
                return redirect("/")->with('msg', 'Erro no Login, tente novamente!');
            }
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

    public function termandconditions()
    {
        return view("autenticacao.termandconditions");
    }

    public function activateaccstudent($md5mail)
    {

        $users = User::all();

        foreach ($users as $user) {
            $md5usermail = md5($user->USER_MAIL);
            if ($md5usermail === $md5mail) {
                User::where('USER_MAIL', $user->USER_MAIL)->update(array('USER_STATE' => 1));

                return redirect("/")->with('msg', 'Conta ativada com sucesso!');
            }
        }



        return redirect("/")->with('msg', 'Ocorreu um Erro!');
    }

    public function forgotpassword($md5mail)
    {

        $users = User::all();

        foreach ($users as $user) {
            $md5usermail = md5($user->USER_MAIL);
            if ($md5usermail === $md5mail) {
                return view("/autenticacao.forgotpassword", ['tokerino' => $md5mail]); //envio de email cripto
            }
        }
        return redirect("/")->with('msg', 'Ocorreu um Erro!');
    }

    public function submitnewpassLinkMail(Request $request)
    {

        $users = User::all();

        foreach ($users as $user) {
            $md5usermail = md5($user->USER_MAIL);
            if ($md5usermail === $request->token) {
                User::where('USER_MAIL', $user->USER_MAIL)->update(array('USER_PWD' => md5($request->novaPassword)));
                return redirect("/")->with('msg', 'Alteração Realizada com Sucesso');
            }
        }
        return redirect("/")->with('msg', 'Ocorreu um Erro!');
    }

    public function submitlinkforgotpass(Request $request)
    {

        $link = "<p>Informamos que foi solicitada uma nova password para este email na plataforma GEA - Gestao de Estagios Academicos</p>
        <br><p>Ao clicar no link será redirecionado para a alteracao da mesma, caso não seja o responsavel por este pedido entre em contato conosco imediatamente!</p>
        <a href= http://127.0.0.1:8000/forgotpassword/" . md5($request->mail) . ">Clique aqui para alterar a password da sua conta</a>";
        $title = "Recuperar a sua password";

        $mail = new MailSender();

        $mail->mail("gp2022grupob@gmail.com", $title, $link); //está a enviar para gp apenas por teste, no primeiro campo será inserido o email $request->email <<<<-------- 

        return redirect("/")->with('msg', 'Link de recuperação enviado para o seu Email de autenticacão!');
    }

    public function pagemailforgotpass()
    {
        return view("/autenticacao.forgotpasswordsendemail");
    }
}
