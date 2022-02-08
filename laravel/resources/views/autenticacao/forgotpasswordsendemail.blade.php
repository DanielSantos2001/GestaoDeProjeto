@extends('header')

<div id="context" class="contextOverflow"></div>
<div id="content">
    <form action="/submitlinkforgotpass" method="post">
        @csrf
        <table class="page zone">
            <tbody>
                <tr>
                    <td>
                        <table class="horizontalline">
                            <tbody>
                                <tr>
                                    <td class="subtitle">
                                        Insira o Email de Autenticação
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
                                        Email:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                        <input type="text" name="mail" placeholder="Insira o Email de Autenticação" style="width:100%;" class="inputText">
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
                                        <input type="submit" value="Enviar" class="button buttonFront">
                                        <a href="\login" class="button buttonBack">Voltar</a>
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
