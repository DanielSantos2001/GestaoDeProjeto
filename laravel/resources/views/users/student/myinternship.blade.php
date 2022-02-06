@extends('main')

@section('title', 'Meu Estágio')

@section('content')
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">Meu Estágio<span class="arrow"></span></span>
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
                                    Meu Estágio
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
                                                <th class="cellheaderleft">
                                                    Data
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down-alt" viewBox="0 0 16 16">
                                                            <path d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z" />
                                                        </svg>
                                                    </a>
                                                </th>
                                                <th class="cellheader">Descrição da Ata</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="lightrow">
                                                <td class="contentLeft">01-01-01</td>
                                                <td class="contentCenter" style="width: 70%">Ata 1</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                            </tr>
                                            <tr class="lightrow">
                                                <td class="contentLeft">02-02-02</td>
                                                <td class="contentCenter" style="width: 70%">Ata 2</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                            </tr>
                                            <tr class="lightrow">
                                                <td class="contentLeft">03-03-03</td>
                                                <td class="contentCenter" style="width: 70%">Ata 3</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                            </tr>
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