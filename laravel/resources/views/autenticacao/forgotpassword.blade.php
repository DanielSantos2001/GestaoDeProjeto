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
                                            class="inputText" id="pass">
                                            <br>
                                            <span style="color: red;display: none;" id="span1">
                                                *Palavras Pass não Coincidem
                                            </span>
                                        
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
                                            class="inputText" id="confirmpass" onblur="checkPass()">
                                            <br>
                                            <span style="color: red; display: none;" id="span2">
                                                *Palavras Pass não Coincidem
                                            </span>
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
                                        <input type="submit" value="Alterar" onclick="" class="button buttonFront" id="buttonSubmit">
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
    <script>
        function checkPass() {
		var pass = document.getElementById("pass").value;
		var checkpass = document.getElementById("confirmpass").value;

		if(pass !== checkpass) {
			document.getElementById("span1").style.display="block";
            document.getElementById("span2").style.display="block";
            document.getElementById("buttonSubmit").setAttribute("disabled","disabled");
		}else{
            document.getElementById("span1").style.display="none";
            document.getElementById("span2").style.display="none";
            document.getElementById("buttonSubmit").removeAttribute("disabled");
        }
	}
    </script>
</div>
