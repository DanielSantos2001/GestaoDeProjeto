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
            Registos de Contas
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
                                    Empresa X
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
                                    Nome da Empresa:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    Nome Exemplo
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Contacto Telefónico:
                                </td>
                                <td class="cellcontentLarge">
                                    910 000 000
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
                                    Morada:
                                </td>
                                <td class="cellcontentLarge">
                                    Rua Exemplo
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
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class="gea_flex_end">
                <td>
                    <input type="submit" value="Aceitar" onclick="" class="button buttonFront">
                </td>
                <td>
                    <input type="button" value="Rejeitar" onclick="" class="button buttonBack">
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