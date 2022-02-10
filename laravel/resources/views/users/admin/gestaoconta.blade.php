@extends('main')

@section('title', 'Gestão de Contas')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Gestão de Contas
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="content">
    @include('searchTab')
    <div id="separatorsArea">
        <div id="separators">
            <a href="">
                <span class="openedtab_sl" id="tabtab_resumoPessoal1">
                    Registos de Conta
                </span>
            </a>
            <span class="closedtab_sl" id="tabtab_resumoPessoal2">
                <div class="closedtabdiv">
                    Gestão de Contas
                </div>
            </span>
            <a href="">
                <span class="openedtab_sl" id="tabtab_resumoPessoal3">
                    Premissões de Estudantes
                </span>
            </a>
        </div>
    </div>
    <table class="page zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Gestão de Contas
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="zonecontent">
                        <tbody>
                            <tr>
                                <td>
                                    <div id="notificacoes">
                                        <table style="width: 100%" class="displaytable">
                                            <thead>
                                                <tr>
                                                    <th class="cellheaderleft">Nome da Empresa</th>
                                                    <th class="cellheader">Tipo de Utilizador</th>
                                                    <th class="cellheader">Estado</th>
                                                    <th class="cellheader">Admin. <br> Estado</th>
                                                    <th class="cellheader">&nbsp;</th>
                                                    <!-- Para botão de detalhes -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="lightrow">
                                                    <td class="contentLeft">Empresa 1</td>
                                                    <td class="contentCenter" style="width: 30%">Empresa</td>
                                                    <td class="contentCenter" style="width: 20%">Ativo</td>
                                                    <td class="contentCenter" style="width: 10%"><input type="checkbox"></td>
                                                    <td class="contentRight" style="width: 5%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
@endsection