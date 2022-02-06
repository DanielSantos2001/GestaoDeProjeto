@extends('main')

@section('title', 'Minhas Preferências')

@section('content')
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">Minhas Preferências<span class="arrow"></span></span>
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
                                    Minhas Preferências
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
                                                <th class="cellheaderleft">Nome da Empresa</th>
                                                <th class="cellheader">Oferta de Estágio</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de remover -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="lightrow">
                                                <td class="contentLeft">Cisco Enterprise</td>
                                                <td class="contentCenter" style="width: 60%">Configurar Redes</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                                <td class="contentRight" style="width: 1%"><a class="botaodetalhes" href="#">-</a></td>
                                            </tr>
                                            <tr class="lightrow">
                                                <td class="contentLeft">Sonae</td>
                                                <td class="contentCenter" style="width: 60%">Gestão Organizacional do grupo de Armazenamento</td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#">Detalhes</a></td>
                                                <td class="contentRight" style="width: 1%"><a class="botaodetalhes" href="#">-</a></td>
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