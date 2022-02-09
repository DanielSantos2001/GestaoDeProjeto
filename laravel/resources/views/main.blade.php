<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" href="/css/chosen.css">
    <link rel="stylesheet" href="/css/mensagens.css">
    <link rel="stylesheet" href="/css/nonio_alunos.css">
    <link rel="stylesheet" href="/css/nonio_alunos2.css">
    <link rel="stylesheet" href="/css/gea_style.css">
    <link rel="stylesheet" href="/css/obtemConteudoTextoLayoutInstituicao.css">
    <!-- Styles -->
</head>

<body>
    <div id="master">
        <div id="header">
            <table class="headerTable">
                <tbody>
                    <tr>
                        <td>
                            <a href="#">
                                <img src="/img/IPC-PRETO.png" class="hidden-phone hidden-tablet header-normal" border="0">
                                <img src="/img/IPC-PRETO.png" class="hidden-desktop header-mobile" border="0">
                            </a>
                        </td>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="hidden-phone">
                                            <a href="/main/perfil">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>
                                            </a>
                                            &nbsp;
                                        </td>
                                        <td class="hidden-phone">
                                            <span class="hidden-tablet">{{Session::get('username')}}&nbsp;|&nbsp;</span>
                                        </td>
                                        <td>
                                            <a class="navtableGo" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                </svg></a>
                                        </td>
                                        <td class="hidden-phone">
                                            <span>&nbsp;|&nbsp;</span><a class="navtableGo" href="/logout">Sair</a>
                                        </td>
                                        <td class="header-idiomas">
                                            &nbsp;|&nbsp;<span class="selected">PT</span>&nbsp;<a href="#">EN</a>&nbsp;
                                        </td>
                                        <td class="hidden-tablet hidden-desktop">
                                            <button id="link-menu-mob" class="link-menu-mob" href="#">
                                                <div class="button-menu-bar"></div>
                                                <div class="button-menu-bar"></div>
                                                <div class="button-menu-bar"></div>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="flxContainer" style="display: block;">
            <div class="flxContainer" id="areaMenuConteudo">
                <div class="menu hidden-tablet hidden-phone" style="min-height: 900px;">
                    <div class="menuTitle handMouseCursor" onclick="window.location ='/main'">
                        <p>Menu</p>
                    </div>
                    <ul class="menuGroup">

                        @if(Session::get('usertype') == 'estudante')
                        @include('sideMenu.aluno')
                        @elseif(Session::get('usertype') == 'docente')
                        @include('sideMenu.docente')
                        @elseif(Session::get('usertype') == 'empresa')
                        @include('sideMenu.empresa')
                        @endif

                        @if(Session::get('useradmin'))
                        @include('sideMenu.admin')
                        @endif

                        <div style="position: relative; bottom:0;">
                            <ul class="menuGroup">
                                <li class="menuItem">
                                    <ul class="menu-list" style="list-style: none;">
                                        <li>
                                            <a onclick="abrirEcraModalPrivacidade();">
                                                <span class="hand" id="politicaPrivacidade">Política de Privacidade</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
                <div class="containermain">
                    <div class="wrap">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footerTable">
                <div class="footerTableBody">
                    <div class="footerTableRow">
                        <div class="footerTableLeft">
                            <div class="menuLastAcess">
                                <strong> Último acesso: </strong><br class="hidden-desktop">
                                23-12-2021 13:10
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footerTableMiddle">
                    <table class="footrLogo">
                        <tbody>
                            <tr>
                                <td width="100%">
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="footerTableRight">
                    2021&nbsp;·&nbsp;IPC&nbsp;·&nbsp;
                </div>
            </div>
        </div>
    </div>
    <script src="/js/update.js"></script>
</body>

</html>