@extends('main')

@section('title', 'Premissões de Estudantes')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Permissões de Estudantes
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
            <a href="">
                <span class="openedtab_sl" id="tabtab_resumoPessoal3">
                    Gestão de Contas
                </span>
            </a>
            <span class="closedtab_sl" id="tabtab_resumoPessoal2">
                <div class="closedtabdiv">
                    Premissões de Estudantes
                </div>
            </span>
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
                                    Premissões de Estudantes
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
                                                    <th class="cellheaderleft">Nome do Estudante</th>
                                                    <th class="cellheader">Curso</th>
                                                    <th class="cellheader">Estado</th>
                                                    <th class="cellheader">E-mail</th>
                                                    <th class="cellheader">&nbsp;</th>
                                                    <!-- Para botão de detalhes -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $aluno)
                                                <tr class="lightrow">
                                                    <form id="studentform" method="post" action="/premissaostudent/change">
                                                        @csrf
                                                        <td class="contentLeft">{{$aluno->USER_NAME}}</td>
                                                        <td class="contentCenter" style="width: 15%">{{$aluno->USER_COURSE}}</td>
                                                        <td class="contentCenter" style="width: 15%">
                                                            @if($aluno->USER_STATE == 1)
                                                            Ativo
                                                            @else
                                                            Inativo
                                                            @endif
                                                        </td>
                                                        <td class="contentCenter" style="width: 30%">{{$aluno->USER_MAIL}}</td>
                                                        <input type="hidden" name="id" value="{{$aluno->USER_ID}}">
                                                        <input type="hidden" name="valoralterado" id="valoralterado{{$aluno->USER_ID}}" value="">
                                                        @if($aluno->USER_STATE == 0)
                                                        <td class="contentRight" style="width: 5%">
                                                            <input type="submit" class="botaodetalhes" value="Ativar" id="ativeinput" name="ativeinput" onclick="ativar('{{$aluno->USER_ID}}')">
                                                        </td>
                                                        @else
                                                        <td class="contentRight" style="width: 5%">
                                                            <input type="submit" class="botaodetalhes" value="Desativar" id="desativeinput" name="desativeinput" onclick="desativar('{{$aluno->USER_ID}}')">
                                                        </td>
                                                        @endif
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

<script>
    function desativar(id) {
        document.getElementById('valoralterado'+id).value = 0;
    }

    function ativar(id) {
        document.getElementById('valoralterado'+id).value = 1;
    }
</script>
@endsection