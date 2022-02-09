@extends('main')

@section('title', 'Minhas Propostas')

@section('content')

<!-- TESTE -->
@php
$info = [['nome' => 'Configurar Redes', 'alunos' => 3],
         ['nome' => 'Gestão Organizacional do grupo de Armazenamento', 'alunos' => 5],
         ['nome' => 'Contabilidade no mini-mercado local', 'alunos' => 10]];
@endphp

<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Minhas Propostas
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
                                    Minhas Propostas
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
                                                <th class="cellheaderleft">Estágio</th>
                                                <th class="cellheader">Interessados</th>
                                                <th class="cellheader">Estado</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($info as $data)
                                            <tr class="lightrow">
                                                <td class="contentLeft">{{ $data['nome'] }}</td>
                                                <td class="contentCenter" style="width: 20%">{{ $data['alunos'] }} Alunos</td>
                                                <td class="contentCenter" style="width: 15%;">Ativo</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
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
</div>
@endsection