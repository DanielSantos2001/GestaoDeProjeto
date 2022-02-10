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
            <a href="/registoconta">
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
                                                    <th class="cellheaderleft">Nome Completo</th>
                                                    <th class="cellheader">Tipo de Utilizador</th>
                                                    <th class="cellheader">Estado</th>
                                                    <th class="cellheader">Admin. <br> Estado</th>
                                                    <th class="cellheader">&nbsp;</th>
                                                    <!-- Para botão de detalhes -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $list as $user)
                                                <tr class="lightrow">
                                                    <form id="detalhesGestaoConta" method="get" action="/gestaoconta/detalhes">
                                                        <td class="contentLeft">{{$user->USER_NAME}}</td>
                                                        <td class="contentCenter" style="width: 30%">
                                                            @if($user->USER_TYPE == 'docente')
                                                            Docente
                                                            @else
                                                            Não Docente
                                                            @endif
                                                        </td>
                                                        <td class="contentCenter" style="width: 20%">
                                                            @if($user->USER_STATE == 1)
                                                            Ativo
                                                            @else
                                                            Inativo
                                                            @endif
                                                        </td>
                                                        @if($user->USER_ADMIN == 1)
                                                        <td id="checkbox" class="contentCenter" style="width: 10%"><input type="checkbox" checked value='tick' onclick="updateValues()">
                                                            @else
                                                        <td id="checkbox1" class="contentCenter" style="width: 10%"><input type="checkbox" value='nontick'>
                                                            @endif
                                                        </td>
                                                        <td class="contentCenter" style="width: 0%"><input type="hidden" name="iddocente" value="{{$user->USER_ID}}"></td>
                                                        <td class="contentRight" style="width: 5%"><input class="botaodetalhes" type="submit" value="Detalhes"></td>
                                                    </form>
                                                </tr>
                                                @endforeach
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

<script>
    function updateValues() {
        var checkbox = document.getElementById("checkbox");
        var checkbox = document.getElementById("checkbox1");
        if (checkbox.checked == true) {

        }

    }
</script>