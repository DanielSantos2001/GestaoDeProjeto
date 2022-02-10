@extends('main')

@section('title', 'Detalhes da Conta')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <a href="">
        <span style="z-index: 3;" class="lightArrow clickArrow">
            Registos
            <span class="arrow"></span>
        </span>
    </a>
    <a href="">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Gestão de Contas
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
                                    Professor X
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
                                <td class="label" id="nome">
                                    Nome Completo:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    Nome Exemplo
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="estado">
                                    Estado:
                                </td>
                                <td class="cellcontentLarge" id="estado">
                                    Pendente
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="email">
                                    Email:
                                </td>
                                <td class="cellcontentLarge" id="mailOficial">
                                    email@exemplo.com
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Curso:
                                </td>
                                <td class="cellcontentLarge">
                                    Engenharia Informática
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Premissões de <br> Administrador:
                                </td>
                                <td class="cellcontentLarge">
                                    <br>
                                    Sim
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class="gea_flex_end">
                <td>
                    <input type="submit" value="Desativar" onclick="" class="button buttonFront">
                </td>
            </tr>
        </tbody>
    </table>
    <table class="page">
        <tbody>
            <tr>
                <td class="flex_buttons_int">
                    <table class="zoneformbuttons">
                        <tbody>
                            <tr>
                                <td>
                                    <input type="button" value="Voltar" onclick="window.location='/'" class="button buttonBack">
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