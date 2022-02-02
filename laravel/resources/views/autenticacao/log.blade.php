@extends('header')

<body>


    <div class="" bis_skin_checked="1">
        <div class="wrap" bis_skin_checked="1">

            <div id="contentLogin" class="contentLogin" style="display: block;" bis_skin_checked="1">
                <div id="contentLoginMessageContainer" bis_skin_checked="1">
                    <div id="contentLoginMessage" bis_skin_checked="1">
                    </div>
                </div>
                <div id="contentLoginContainer" class="contentLoginContainer" bis_skin_checked="1">

                    <div class="contentLoginContainerRight" bis_skin_checked="1">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="tituloSeccaoLogin">
                                        Bem-Vindo ao GEA
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

                                            <div bis_skin_checked="1"><input type="hidden"
                                                    name="org.apache.struts.taglib.html.TOKEN"
                                                    value="b6239d131a7c34dfffe7c20a4d75bffc"></div>

                                            <input type="hidden" name="tipoCaptcha" value="text" id="tipoCaptcha">
                                            <table class="logintable" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            <input type="text" name="username" value="" id="username"
                                                                style="width: 100%"
                                                                class="inputText focarPrimeiroElemento"
                                                                placeholder="Email de Utilizador">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><br>
                                                            <input type="password" name="password" value=""
                                                                id="password1" style="width: 100%"
                                                                class="inputText" placeholder="Palavra-chave"><br>
                                                            <span class="logintableSpan"><a href="#"
                                                                    class=""
                                                                    bis_skin_checked="1"><span>Esqueceu-se da
                                                                        palavra-chave?</span></a></span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div style="margin-top:8px;min-height: 50px; text-align: center;"
                                                                bis_skin_checked="1">
                                                                    <input type="submit"
                                                                    value="Entrar"
                                                                    class="button">
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
                    </div>


                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="tituloSeccaoLogin2">


                                        Novo utilizador?


                                    </td>
                                </tr>
                                <tr>
                                    <td id="contentLoginContainerLeftBody3">
                                        <table style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-bottom: 15px;">
                                                        Se esta é a <b>primeira vez</b> que acede a este serviço como
                                                        aluno e não sabe as suas credenciais por favor selecione o
                                                        seguinte <a href="/firstTime" class=""
                                                            bis_skin_checked="1"><span>link</span></a>.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <form action="novoRegisto.do" target="_parent" method="POST">
                                                            <input type="submit" name="voltar" value="Registar"
                                                                class="button"></form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td class="tituloSeccaoLogin2">

                                        Ajuda

                                    </td>
                                </tr>
                                <tr>
                                    <td id="contentLoginContainerLeftBody">

                                        <table style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div style="margin-bottom: 10px;" bis_skin_checked="1">Caso
                                                            necessite de ajuda, por favor não hesite em contactar-nos:
                                                        </div>
                                                        <div bis_skin_checked="1">
                                                            <p>gp2021grupob@gmail.com</p>
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
