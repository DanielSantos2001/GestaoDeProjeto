@extends('main')

@section('title', 'Candidatura Estágio Detalhes')

@section('content')

<!-- TESTE -->
@php
$estagio = 'Configurar Redes';
$info = [['aluno' => 'Aluno exemplo 1', 'pref' => 1],
         ['aluno' => 'Aluno exemplo 2', 'pref' => 1],
         ['aluno' => 'Aluno exemplo 3', 'pref' => 2]];
@endphp

<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <a href="">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Candidatura Estágio
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Detalhes
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="content">
    @include('searchTab')
    <table class="page zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    {{ $estagio }}
                                </td>
                                <td class="zonelinks">
                                    <a href="#" class="botaodetalhes"><span>Entregar Proposta a um Aluno</span></a>
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
                                    <table style="width: 100%" class="displaytable">
                                        <thead>
                                            <tr>
                                                <th class="cellheaderleft">Aluno</th>
                                                <th class="cellheader">Preferência do Aluno</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de aceitar -->
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de rejeitar -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($info as $data)
                                            <tr class="lightrow">
                                                <td class="contentLeft">{{ $data['aluno'] }}</td>
                                                <td class="contentCenter" style="width: 30%">{{ $data['pref'] }}º</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Aceitar</a></td>
                                                <td class="contentRight" style="width: 5%"><a class="botaodetalhes" href="#">Rejeitar</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="page">
        <tbody>
            <tr>
                <td>
                    <table class="zoneformbuttons">
                        <tbody>
                            <tr>
                                <td>
                                    <input type="button" value="Voltar" onclick="" class="button buttonBack">
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