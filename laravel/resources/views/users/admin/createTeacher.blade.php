@extends('main')

@section('title', 'Criar Docente')

@section('content')

@php
$msgerror=$msgerror ?? 'Default value';
$msgpass = $msgpass ?? 'Default value';
@endphp

<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Criar Docente
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="context" class="contextOverflow"></div>
<div id="content">
    <form id="" method="post" action="/users.registerconfirm">
        @csrf
        <table class="page zone">
            <tbody>
                <tr>
                    <td>
                        <table class="horizontalline">
                            <tbody>
                                <tr>
                                    <td class="subtitle">
                                        Criar Docente
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
                                        <span id="spanTextPessNome">
                                            <input type="text" name="pessNome" value="" style="width:80%;" class="inputText" required>
                                        </span>
                                        <br>
                                        @if($msgerror == "*Campo Obrigatório")
                                        <span style="color: red">
                                            *Campo Obrigatório
                                        </span>
                                        @endif
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
                                        <span id="spanTextPessEmail">
                                            <input type="text" name="pessEmail" value="" style="width:80%;" class="inputText" required>
                                        </span>
                                        <br>
                                        @if($msgerror == "*Campo Obrigatório")
                                        <span style="color: red">
                                            *Campo Obrigatório
                                        </span>
                                        @endif
                                        <br>
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
                                        <input type="password" id="pass" name="passwd" style="width:80%;" class="inputText" required>
                                        <br>
                                        <span style="color: red;display:none;" id="span1">
                                            As passwords não coincidem!
                                        </span>
                                        <br>
                                        @if($msgerror == "*Campo Obrigatório")
                                        <span style="color: red">
                                            *Campo Obrigatório
                                        </span>
                                        @endif
                                        @if($msgpass == "As passwords não coincidem!")
                                        <span style="color: red">
                                            As passwords não coincidem!
                                        </span>
                                        @endif
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
                                        <input type="password" id="pass2" name="checkPasswd" style="width:80%;" class="inputText" onblur="checkPass()" required>
                                        <br><span style="color: red;display:none;" id="span2">
                                            As passwords não coincidem!
                                        </span>
                                        @if($msgerror == "*Campo Obrigatório")
                                        <span style="color: red">
                                            *Campo Obrigatório
                                        </span>
                                        @endif
                                        @if($msgpass == "As passwords não coincidem!")
                                        <span style="color: red">
                                            As passwords não coincidem!
                                        </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <span class="mandatory" id="mandatorycodigo2">
                                            *
                                        </span>
                                        Curso:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                        <select name="cursoDocente" id="cursoDocente" class="inputText" onchange="utilizadordocente()">
                                            <option value="LSTI">Sistemas e Tecnologias da Informação</option>
                                            <option value="LEI">Engenharia Informática</option>
                                            <option value="LM">Marketing</option>
                                            <option value="LGB">Gestão Bioindústria</option>
                                            <option value="LG">Gestão</option>
                                            <option value="LCA">Contabilidade</option>
                                            <option value="LDROT">Desenvolvimento Regional e Ordenamento do Território</option>
                                            <option value="LII">Informática Industrial </option>
                                        </select>
                                        <br>
                                        @if($msgerror == "*Campo Obrigatório")
                                        <span style="color: red">
                                            *Campo Obrigatório
                                        </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <span>
                                            <input type="checkbox" name="checkTerms" value="false" id="checkTerm">
                                        </span>
                                    </td>
                                    <td>
                                        Permissões de Administrador
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
                                        <input type="submit" id="register" value="Registar" onclick="" class="button buttonFront">
                                        <input type="button" value="Cancelar" onclick="window.location='/main'" class="button buttonBack">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <input id="typeUser" type="hidden" name="typeUser" value="admindocente">
        <input id="cursoInput" type="hidden" name="cursoInput" value="LSTI">
    </form>
</div>

<script>
    function utilizadordocente() {
        var cursoDocente = document.getElementById("cursoDocente");
        var cursoInput = document.getElementById("cursoInput");

        cursoInput.value = cursoDocente.value;
        console.log(cursoInput.value);
    }

    function checkPass() {
        var pass = document.getElementById("pass").value;
        var checkpass = document.getElementById("pass2").value;

        if (pass !== checkpass) {
            document.getElementById("span1").style.display = "block";
            document.getElementById("span2").style.display = "block";
            document.getElementById("register").setAttribute("disabled", "disabled");
        } else {
            document.getElementById("span1").style.display = "none";
            document.getElementById("span2").style.display = "none";
            document.getElementById("register").removeAttribute("disabled");
        }
    }
</script>
@endsection