@extends('main')

@section('title', 'Acompanhamento de Estágio')

@section('content')

@php
$info = [['name' => 'Aluno exemplo 1', 'curso' => 'Licenciatura em Sistemas e Tecnologias de Informação'],
         ['name' => 'Aluno exemplo 2', 'curso' => 'Licenciatura em Sistemas e Tecnologias de Informação'],
         ['name' => 'Aluno exemplo 3', 'curso' => 'Licenciatura de Engenharia Informática']];
@endphp

<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Acompanhamento de Estágio
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
                                    Acompanhamento de Estágio
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
                                                <th class="cellheaderleft">Nome do Aluno</th>
                                                <th class="cellheader">Curso</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($info as $data)
                                            <tr class="lightrow">
                                                <td class="contentLeft">{{ $data['name'] }}</td>
                                                <td class="contentCenter" style="width: 50%">{{ $data['curso'] }}</td>
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