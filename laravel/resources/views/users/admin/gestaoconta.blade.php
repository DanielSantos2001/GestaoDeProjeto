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
                                                @for ($i = 0; $i < count($list); $i++) <tr class="lightrow">

                                                    <td class="contentLeft">{{$list[$i]->USER_NAME}}</td>
                                                    <td class="contentCenter" style="width: 30%">
                                                        @if($list[$i]->USER_TYPE == 'docente')
                                                        Docente
                                                        @else
                                                        Não Docente
                                                        @endif
                                                    </td>
                                                    <td class="contentCenter" style="width: 20%">
                                                        @if($list[$i]->USER_STATE == 1)
                                                        Ativo
                                                        @else
                                                        Inativo
                                                        @endif
                                                    </td>
                                                    <form id="detalhesGestaoConta1{{$i}}" method="post" action="/gestaoconta/change">
                                                        @csrf
                                                        <td class="contentCenter" style="width: 10%">
                                                            <input type="hidden" name="id" value="{{$list[$i]->USER_ID}}">
                                                            <input type="hidden" name="valoralterado" id="valoralterado" value="">
                                                            <input type="checkbox" id="check{{$i}}" @if($list[$i]->USER_ADMIN == 1) checked @endif onclick="updateValues('{{$i}}', '{{count($list)}}');">
                                                        </td>
                                                    </form>
                                                    <form id="detalhesGestaoConta2" method="get" action="/gestaoconta/detalhes">
                                                        @csrf
                                                        <td class="contentCenter" style="width: 0%"><input type="hidden" name="iddocente" value="{{$list[$i]->USER_ID}}"></td>
                                                        <td class="contentRight" style="width: 5%"><input class="botaodetalhes" type="submit" value="Detalhes"></td>
                                                    </form>
                            </tr>
                            @endfor
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

<script>
    function updateValues(index, n) {

        var check = "";
        var hidden = document.getElementById("valoralterado").value;
        var sub = "";

        for (let $i = 0; $i < n; $i++) {
            if ($i == index) {
                check = document.getElementById("check" + $i);
               sub = document.getElementById("detalhesGestaoConta1" + $i);
            }
        }


        if (check.checked) {
            hidden = 1;
           sub.submit();
        } else {
            hidden = 0;
           sub.submit();
        }
    }
</script>

@endsection