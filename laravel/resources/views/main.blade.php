<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios - GEA</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" href="/css/chosen.css">
    <link rel="stylesheet" href="/css/mensagens.css">
    <link rel="stylesheet" href="/css/nonio_alunos.css">
    <link rel="stylesheet" href="/css/nonio_alunos2.css">
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
                                    <td class="hidden-tablet hidden-phone">
                                        <div class="userFoto-wrap">		
											<img class="userFoto" src="">
										</div>		
                                    </td>
                                    <td class="hidden-phone">
                                        <span class="hidden-tablet">Utilizador Exemplo&nbsp;|&nbsp;</span><a class="navtableGo" href="#">Sair</a>
                                    </td>
                                    <td>

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
                    <div class="menuTitle handMouseCursor">
                        <p>Menu</p>
                    </div>
                    <ul class="menuGroup">
                        @php
                        $tipo = 'Docente'; //Inicializar var tipo de utilizador (TESTE)
                        $admin = false; //Inicializar var bool administrador (TESTE)
                        @endphp

                        @include('scripts.userSideMenu')
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
                <div class="countainermain">
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
                    <table class="footerLogo">
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
</body>
</html>