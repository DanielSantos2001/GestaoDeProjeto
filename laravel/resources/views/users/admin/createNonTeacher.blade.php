@extends('main')

@section('title', 'Criar Não Docente')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Criar Não Docente
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
                                    Criar Não Docente
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
                                    <span class="mandatory" id="mandatorycodigo4">
                                        *
                                    </span>
                                    Nome Completo:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="text" name="name" value="" style="width:70%;" class="inputText">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <span class="mandatory" id="mandatorycodigo4">
                                        *
                                    </span>
                                    E-mail:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="text" name="email" value="" style="width:50%;" class="inputText">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <span class="mandatory" id="mandatorycodigo3">
                                        *
                                    </span>
                                    Palavra-chave:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="password" name="password" value="" style="width:40%;" class="inputText">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <span class="mandatory" id="mandatorycodigo2">
                                        *
                                    </span>
                                    Confirme a Palavra-chave:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="password" name="confirmacaoPassword" value="" style="width:40%;" class="inputText">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <span>
                                        <input type="checkbox" name="checkTerms" value="true" id="checkTerm" required>
                                    </span>
                                </td>
                                <td>
                                    Premissões de Administrador
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="zonemandatoryinterno">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="mandatory" id="lblmandatorySymbol">*</span>
                                    <label id="lblmandatory">Campos de preenchimento obrigatório.</label>
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
                                    <input type="submit" value="Registar" onclick="" class="button buttonFront">
                                    <input type="button" value="Cancelar" onclick="" class="button buttonBack">
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