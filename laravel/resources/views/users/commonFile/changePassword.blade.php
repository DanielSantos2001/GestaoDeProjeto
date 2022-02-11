@if (Session::has('id'))
    @extends('main')

    @section('title', 'Alterar Palavra-Chave')

    @section('content')
        <div class="navtableLight">
            <a href="/main">
                <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
                    Início
                    <span class="arrow"></span>
                </span>
            </a>
            <a href="/main/perfil">
                <span style="z-index: 2;" class="lightArrow clickArrow">
                    Informação Pessoal
                    <span class="arrow"></span>
                </span>
            </a>
            <span style="z-index: 1;" class=" lastArrow">
                Alterar Palavra-Chave
                <span class="arrow"></span>
            </span>
            <br>
        </div>
        <br>
        <div id="context" class="contextOverflow"></div>
        <div id="content">
            <form id="updatePass" method="post" action="/main/perfil/changepassword/s">
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
                                        <tr>
                                            <td>
                                                @if (session('msg'))
                                                    <span
                                                        class="gea_errorMessage"><span>{{ session('msg') }}</span></span>
                                                @endif
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
                                                Utilizador:
                                            </td>
                                            <td class="cellcontentLarge">
                                                {{ Session::get('username') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label">
                                                <span class="mandatory" id="mandatorycodigo4">
                                                    *
                                                </span>
                                                Palavra-chave Atual:
                                            </td>
                                            <td class="cellcontent cellcontentwithinputtext">
                                                <input type="password" name="passwordOriginal" value="" style="width:100%;"
                                                    class="inputText">
                                                Indique a palavra-chave atual como medida de segurança.
                                            </td>
                                        </tr>
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
                                                Deve ter 8 ou mais caracteres, pelo menos uma letra maiúscula, uma minúscula
                                                e
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
                                                <input type="password" name="confirmacaoPassword" value=""
                                                    style="width:100%;" class="inputText">
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
                                                <span id="spanSubmitTag" style="display:none;">
                                                    <img src="../images/progressIndicator.svg?v=1643324203147"
                                                        align="absmiddle">
                                                    &nbsp;
                                                    &nbsp;
                                                    A processar. Por favor aguarde.
                                                </span>
                                                <input type="submit" value="Alterar" onclick="" class="button buttonFront">
                                                <input type="button" value="Voltar" onclick="window.location='/main/perfil'"
                                                    class="button buttonBack">
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
@else
    @php
        abort(404);
    @endphp
@endif
