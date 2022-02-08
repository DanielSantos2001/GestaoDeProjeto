@extends('main')

@section('title', 'Cria Proposta de Estágio')

@section('content')


<div class="navtableLight" id="background_none">
    <a href="/main"><span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">Início<span class="arrow"></span></span></a>
    <span style="z-index: 1;" class=" lastArrow">Criar Proposta de Estágio<span class="arrow"></span></span>
    <br>
</div>

<div class="content">

    <table class="zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Criar Proposta de Estágio
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
                                    <span class="mandatory">*</span>
                                    Título:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="text" name="titulo" class="inputText">
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lbldataNascimento">
                                    <span class="mandatory">*</span>
                                    Descrição:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <textarea name="descricao" rows="6" cols="30" style="resize: none;" class="input_text "></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblestadoCivil">

                                    <span class="mandatory">*</span>

                                    Vagas:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="number" class="form-control" name="vagas" aria-describedby="basic-addon1" min="1" step="1" max="20" data-bind="value:replyNumber">
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblestadoCivil">
                                    Área/Curso:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <select name="estadoCivil" class="inputText">
                                        <option selected>Choose...</option>
                                        <option value="LEI">LEI</option>
                                        <option value="LSTI">LSTI</option>
                                        <option value="LG">LG</option>
                                        <option value="LM">LM</option>
                                        <option value="LGB">LGB</option>
                                        <option value="LCA">LCA</option>
                                        <option value="LII">LII</option>
                                        <option value="LDROT">LDROT</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lbldataNascimento">
                                    <span class="mandatory">*</span>
                                    Perfil de Candidatos:
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <textarea name="descricao" rows="6" cols="30" style="resize: none;" class="input_text "></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Ficheiro(s):
                                </td>
                                <td class="cellcontent cellcontentwithinputtext">
                                    <input type="text" name="swift" size="30" value="" class="inputText">
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
                                    <span class="mandatory" id="lblmandatorySymbol">
                                        *
                                    </span>
                                    <label id="lblmandatory">Campos de preenchimento obrigatório.</label>
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