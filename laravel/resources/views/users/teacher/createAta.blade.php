@extends('main')

@section('title', 'Adicionar Ata')

@section('content')

@php
$info = [['date' => '01-01-01', 'descricao' => 'Ata 1'],
['date' => '02-02-02', 'descricao' => 'Ata 2'],
['date' => '03-03-03', 'descricao' => 'Ata 3']];
@endphp

<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <a href="#">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Acompanhamento de Estágio
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Adicionar Ata
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="content">
    <table class="zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Adicionar Ata
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
                                <td class="label">
                                    <span class="mandatory">*</span>
                                    Titulo:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="text" value="" style="width:100%;" class="inputText">
                                </td>
                            </tr>
                            <tr>
                            <td class="label">
                                    <span class="mandatory">*</span>
                                    Data:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="date" value="" style="width:20%;" class="inputText">
                                </td>
                            </tr>
                            <tr id="linhaDescricao">
                                <td class="label">
                                    <span class="mandatory" id="asterisco">*</span>
                                    Descrição:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <textarea class="mceContentBody inputText" id="exampleFormControlTextarea1" rows="10" style="min-width:100px; width : 100%"></textarea>
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