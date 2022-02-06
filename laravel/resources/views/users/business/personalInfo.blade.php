@extends('main')

@section('title', 'Informação Pessoal')

@section('content')
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">Informação Pessoal<span class="arrow"></span></span>
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
                                    Informação Pessoal
                                </td>
                                <td class="zonelinks">
                                    <a href="#" class="botaodetalhes"><span>Alterar Palavra-chave</span></a>
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
                                <td class="label" id="lblnome">
                                    Nome da Empresa:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    Nome do utilizador exemplo
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblestado">
                                    Estado:
                                </td>
                                <td class="cellcontentLarge" id="estado">
                                    Ativo
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Contacto:
                                </td>
                                <td class="cellcontentLarge">
                                    999 999 999
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblmailOficial">
                                    Email:
                                </td>
                                <td class="cellcontentLarge" id="mailOficial">
                                    utilizadorexemplo@email.com
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Modata:
                                </td>
                                <td class="cellcontentLarge">
                                    Rua Exemplo
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