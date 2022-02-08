@extends('main')

@section('title', 'Adicionar Ata')

@section('content')
<div class="navtableLight">
    <a href="/main">
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
    <form id="" method="post" action="/registerconfirm">
        @csrf
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
                                        <input type="text" value="" style="width:90%;" class="inputText">
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
                                        <textarea class="mceContentBody inputText" id="exampleFormControlTextarea1" rows="10" style="min-width:100px; width:90%"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        Ficheiros:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                        <div class="form-group">
                                            <input class="form-control-file" type="file" name="anexos" id="anexos">
                                        </div>
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
                                        <span id="spanSubmitTag" style="display:none;">
                                            <img src="../images/progressIndicator.svg?v=1643324203147" align="absmiddle">
                                            &nbsp;
                                            &nbsp;
                                            A processar. Por favor aguarde.
                                        </span>
                                        <input type="submit" value="Adicionar" onclick="" class="button buttonFront">
                                        <input type="button" value="Cancelar" onclick="" class="button buttonBack">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection