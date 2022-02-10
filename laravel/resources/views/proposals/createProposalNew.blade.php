@extends('main')

@section('title', 'Criar Proposta de Estágio ')

@section('content')

<div class="containermain">
    <div class="navtableLight">
        <a href="/main">
            <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
                Início
                <span class="arrow"></span>
            </span>
        </a>
        <span style="z-index: 1;" class=" lastArrow">
            Criar Proposta de Estágio
            <span class="arrow"></span>
        </span>
        <br>
    </div>
    <br>
    <div id="context" class="contextOverflow"></div>
    <div id="content">
        <form action="/proposals" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="page zone">
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
                                    <tr>
                                      @if ($errors->any())
                                        <span class="mandatory"> {{$errors->first();}}</span>


                                      @endif
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
                                            Título:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <input type="text" id="titulo" name="titulo" style="width:80%;" class="inputText">
                                            @if(Session::get('useradmin'))
                                              <input type="hidden" name="aprovado" value="1">
                                            @else
                                              <input type="hidden" name="aprovado" value="0">
                                            @endif

                                        </td>
                                    </tr>
                                    @if(Session::get('usertype') == 'empresa')
                                    <tr>
                                        <td class="label">
                                            <span class="mandatory" id="mandatorycodigo4">
                                                *
                                            </span>
                                            Email de Empresa:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <input type="text" name="emailEmpresa" value="{{Session::get('usermail')}}" id="emailEmpresa" style="width:80%;" class="inputText" disabled>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="label">
                                            <span class="mandatory" id="mandatorycodigo4">
                                                *
                                            </span>
                                            Email de Empresa:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <input type="text" name="emailEmpresa" id="emailEmpresa" style="width:80%;" class="inputText">
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td class="label">
                                            <span class="mandatory" id="mandatorycodigo4">
                                                *
                                            </span>
                                            Descrição:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <textarea class="mceContentBody inputText" id="descricao" name="descricao" rows="5" style="min-width:100px; width:80%; resize:none; "></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">
                                            <span class="mandatory" id="mandatorycodigo3">
                                                *
                                            </span>
                                            Vagas:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <input type="number" class="form-control" name="vagas" id="vagas" aria-describedby="basic-addon1" min="1" step="1" max="20" data-bind="value:replyNumber">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">
                                            Área/Curso:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <select name="curso" id="curso" class="inputText">
                                                <option value="LSTI" selected="selected">Sistemas e Tecnologias da Informação</option>
                                                <option value="LEI">Engenharia Informática</option>
                                                <option value="LM">Marketing</option>
                                                <option value="LGB">Gestão Bioindústria</option>
                                                <option value="LG">Gestão</option>
                                                <option value="LCA">Contabilidade</option>
                                                <option value="LDROT">Desenvolvimento Regional e Ordenamento do Território</option>
                                                <option value="LII">Informática Industrial </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">
                                            <span class="mandatory" id="mandatorycodigo2">
                                                *
                                            </span>
                                            Perfil de Candidatos:
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <textarea class="mceContentBody inputText" id="perfil" name="perfil" rows="5" style="min-width:100px; width:80%; resize:none; "></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label">

                                            Ficheiro(s):
                                        </td>
                                        <td class="cellcontent cellcontentwithinputtext">
                                            <input class="form-control-file" type="file" name="fileSaver[]" id="fileSaver" multiple style="width:80%;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="gea_flex_end">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="https://simg.nicepng.com/png/small/128-1280406_view-user-icon-png-user-circle-icon-png.png" id="prop_img_c" class="img_prop">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <label class="custom-file-upload">
                                                <input type="file" name="imagecp" id="imagecp" style="display: none;" class="custom-file-upload">
                                                Adicionar Fotografia
                                            </label>

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
                        <td class="gea_flex_end">
                            <table class="zoneformbuttons ">
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="submit" value="Registar" onclick="" class="button buttonFront">
                                            <input type="button" value="Cancelar" onclick="" name="inserir" class="button buttonBack">
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
</div>
@endsection
