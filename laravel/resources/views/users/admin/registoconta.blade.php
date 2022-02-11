@extends('main')

@section('title', 'Registo de Contas')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Registos de conta
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="content">
    @include('searchTab')
    <div id="separatorsArea">
        <div id="separators">
            <span class="closedtab_sl" id="tabtab_resumoPessoal1">
                <div class="closedtabdiv">
                    Registos de Conta
                </div>
            </span>
            <a href="/gestaoconta">
                <span class="openedtab_sl" id="tabtab_resumoPessoal2">
                    Gestão de Contas
                </span>
            </a>
            <a href="/premissaostudent">
                <span class="openedtab_sl" id="tabtab_resumoPessoal3">
                    Permissões de Estudantes
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
                                    Registo de Contas
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
                                        @if(count($empresas) == 0)
                                            <p>Não existem utilizadores Empresa</p>
                                        @else
                                        <table style="width: 100%" class="displaytable">
                                            <thead>
                                                <tr>
                                                    <th class="cellheaderleft">Nome da Empresa</th>
                                                    <th class="cellheader">Tipo de Utilizador</th>
                                                    <th class="cellheader">Estado</th>
                                                    <th class="cellheader">&nbsp;</th>
                                                    <!-- Para botão de detalhes -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($empresas as $empresa)
                                                <tr class="lightrow">
                                                    <form id="detalhesEmpresa" method="get" action="/registoconta/detalhes">
                                                        @csrf
                                                        <td class="contentLeft">{{ $empresa->USER_NAME }}</td>
                                                        <td class="contentCenter" style="width: 30%">Empresa</td>
                                                        <td class="contentCenter" style="width: 30%">
                                                            @if($empresa->USER_STATE == 1)
                                                            Ativo
                                                            @else
                                                            Inativo
                                                            @endif
                                                        </td>
                                                        <td class="contentCenter" style="width: 0%;">
                                                            <input type="hidden" name="idEmpresa" value="{{ $empresa->USER_ID }}">
                                                        </td>
                                                        <td class="contentRight" style="width: 5%">
                                                            <button class="botaodetalhes" type="submit">
                                                                Detalhes
                                                            </button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @endif
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