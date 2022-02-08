@extends('header')

<div id="context" class="contextOverflow"></div>
<div id="content">
    <form action="/submitnewpassLinkMail" method="post">
        @csrf
        <table class="page zone">
            <tbody>
                <tr>
                    <td>
                        <table class="horizontalline">
                            <tbody>
                                <tr>
                                    <td class="subtitle">
                                        Alterar Palavra-Chave
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
                                        <span class="mandatory" id="mandatorycodigo3">
                                            *
                                        </span>
                                        Nova Palavra-chave:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                        <input type="password" name="novaPassword" value="" style="width:100%;"
                                            class="inputText">
                                        Deve ter 8 ou mais caracteres, pelo menos uma letra maiúscula, uma minúscula e
                                        pelo menos um número.
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
                                        <input type="password" name="confirmacaoPassword" value="" style="width:100%;"
                                            class="inputText">
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
                                        <input type="submit" value="Alterar" onclick="" class="button buttonFront">
                                        <a href="\login" class="button buttonBack">Voltar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="token" value="{{$tokerino}}">
    </form>
</div>
