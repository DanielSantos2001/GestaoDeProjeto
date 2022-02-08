@extends('header')

<body>


    <div id="header">
        <table class="headerTable">
            <tbody>
                <tr>
                    <td>
                        <a href="">
                            <img src="/img/IPC-PRETO.png" class="hidden-phone hidden-tablet header-normal" border="0">
                        </a>
                    </td>
                    <td>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="hidden-tablet hidden-phone">
                                    </td>
                                    <td class="hidden-phone">
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="" bis_skin_checked="1">
        <div class="wrap" bis_skin_checked="1">

            <div id="contentLogin" class="" style="display: block;" bis_skin_checked="1">
                <div id="contentLoginContainer" class="fundo" bis_skin_checked="1">

                    <div class="contentLoginContainerRight" bis_skin_checked="1">
                        <table>
                            <tbody>
                                <br>
                                <tr>
                                    <td class="tituloSeccaoLoginA" style="font-weight: 400; color:white">
                                        Bem-vindo à<br>Gestão de Estágios Académico
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        @if (session('msg'))
                                        <span class="logintableSpan"><span>{{ session('msg') }}</span></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="contentLoginContainerRightBody">


                                        <form id="loginFormBean" method="post" action="/loginAuth">
                                            @csrf

                                            <div bis_skin_checked="1"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="b6239d131a7c34dfffe7c20a4d75bffc"></div>
                                            <br>
                                            <input type="hidden" name="tipoCaptcha" value="text" id="tipoCaptcha">
                                            <table class="logintable" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            <input type="text" name="username" value="" id="username" style="width: 100%" class="inputText focarPrimeiroElemento" placeholder="Email de Utilizador" required>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><br>
                                                            <input type="password" name="password" value="" id="password1" style="width: 100%" class="inputText" placeholder="Palavra-chave" required><br>
                                                            <span class="logintableSpan"><a href="/forgotpassword2" class="" bis_skin_checked="1"><span>Esqueceu-se da
                                                                        palavra-chave?</span></a></span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div style="margin-top:8px;min-height: 50px; text-align: center;" bis_skin_checked="1">
                                                                <input type="submit" value="Entrar" class="button">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>
                    </div>


                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="tituloSeccaoLogin2" style="padding-left: 15px;">
                                        Novo Utilizador ?
                                    </td>
                                </tr>
                                <tr>
                                    <td id="contentLoginContainerLeftBody3">
                                        <table style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-bottom: 15px; padding-left: 15px;">
                                                        Se esta é a <b>primeira vez</b> que acede a este serviço como
                                                        aluno e não sabe as suas credenciais por favor selecione o
                                                        seguinte <a href="/firstTime" class="" bis_skin_checked="1"><span>link</span></a>.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 10px;">
                                                        <form action="/registerpage" method="post">
                                                            @csrf
                                                            <input type="submit" name="voltar" value="Registar" class="button">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="" bis_skin_checked="1" >
                      
                        <table style=" float:right; padding-right: 55px; padding-top: 15px;">
                            <tbody>
                                <tr>
                                    <td class="tituloSeccaoLogin2" >

                                        Ajuda

                                    </td>
                                </tr>
                                <tr>
                                    <td id="contentLoginContainerLeftBody">

                                        <table style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div style="padding-bottom: 15px;" bis_skin_checked="1">Caso
                                                            necessite de ajuda, por favor<br>não hesite em contactar-nos:
                                                        </div>
                                                        <div bis_skin_checked="1">
                                                            <b>gp2021grupob@gmail.com</b>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
        <div class="clear" bis_skin_checked="1">&nbsp;</div>

    </div>
</body>