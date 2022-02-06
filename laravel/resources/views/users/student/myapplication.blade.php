@extends('main')

@section('title', 'Minhas Candidaturas')

@section('content')
@php
$var = ['Configurar Redes', 'Gestão Organizacional do grupo de Armazenamento', '-']; //TESTE
@endphp
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">Minhas Candidaturas<span class="arrow"></span></span>
    <br>
</div>
<br>
<div id="context" class="contextOverflow"></div>
<div id="content">
    <table class="page zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Propostas de Estágio
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
                                                <th class="cellheaderleft">Ordem de preferência</th>
                                                <th class="cellheader">Oferta de Estágio</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for($i = 0; $i < count($var); $i++)
                                            <tr class="lightrow">
                                                <td class="contentLeft">{{ $i+1 }}</td>
                                                <td class="contentCenter" style="width: 70%">{{ $var[$i] }}</td>
                                                @if($var[$i] != '-')
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">-</a></td>
                                                @endif
                                            </tr>
                                            @endfor
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