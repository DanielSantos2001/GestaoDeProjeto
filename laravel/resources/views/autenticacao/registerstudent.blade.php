@extends('header')
<body>
	<script>
		function verifyRegex() {

			var mail = String(document.getElementById("pessEmail").value);
			if (String(mail).includes("@alunos.estgoh.ipc.pt")) {
				document.getElementById("warningJS").style.display = "none";
			} else {
				document.getElementById("warningJS").style.display = "inline";
				document.getElementById("warningJS").style.color = "red";
			}

		}

		function checkPass() {
			var pass = document.getElementById("pass").value;
			var checkpass = document.getElementById("pass2").value;

			if (pass !== checkpass) {
				document.getElementById("register").disable = true;
				alert("pass não iguais");
			}
		}
	</script>
	<div id="master">
		<div id="header">
			<table class="headerTable">
				<tbody>
					<tr>
						<td>
							<a href="login">
								<img src="/img/IPC-PRETO.png" class="hidden-phone hidden-tablet header-normal" border="0">
							</a>
						</td>
						<td>
							<table>
								<tbody>
									<tr>
										<td class="hidden-tablet hidden-phone">
										</td>
										<td class="hidden-phone">
										</td>
										<td>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="container" style="display: block;">
			<div id="navigation">
				<div class="navtableLight">
					<a href="/"><span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">Início<span class="arrow"></span></span></a>
					<span style="z-index: 1;" class=" lastArrow">Registo<span class="arrow"></span></span>
					<br>
				</div>
				<br>
			</div>
			<div id="centralarea">
				<div id="contextWithoutMenuWithContacts">
				</div>
				<div id="separatorsArea" class="separadorNoMenu">
					<div id="separators">Registo On-line - Gestão de Estágios Académicos - Utilizador Estudante</div>
				</div>
				<div id="contentGlobal">
					<div id="content" class="conteudo">
						<form id="" method="post" action="/registerconfirm">
							@csrf
							@php
							$msgerror=$msgerror ?? 'Default value';
							$msgpass = $msgpass ?? 'Default value';
							@endphp
							<table class="page" style="padding: 0px;">
								<tbody>
									<tr>
										<td>
											<table class="zone">
												<tbody>
													<tr>
														<td>
															<table class="zonecontent">
																<tbody>
																	<tr id="trRegisto">
																		<td class="label" style="width:29%">
																			<span class="mandatory" id="mandatorynome">
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
																			<span class="mandatory" id="mandatoryemail">
																				*
																			</span>
																			E-mail:
																		</td>
																		<td class="cellcontent cellcontentwithinputtext">
																			<span id="spanTextPessEmail">
																				<input type="text" name="pessEmail" id="pessEmail" value="" style="width:80%;" class="inputText" onchange="verifyRegex()" required>
																			</span>
																			<br>Principal forma de contacto utilizada pelo GEA.
																			<span id="warningJS" style="display: none">
																				<br>*Use o seu E-mail institucional!
																			</span>
																			@if(session('msgmail'))
																			<span style="color: red">
																				<br>*Use o seu E-mail institucional!
																			</span>
																			@endif
																			<br>
																			@if($msgerror == "*Campo Obrigatório")
																			<span style="color: red">
																				*Campo Obrigatório
																			</span>
																			@endif
																		</td>
																	</tr>
																	<tr>
																		<td class="label" style="width:29%">
																			<span class="mandatory" id="mandatorynome">
																				*
																			</span>
																			Palavra-Chave:
																		</td>
																		<td class="cellcontent cellcontentwithinputtext">
																			<span id="spanPassword">
																				<input type="password" name="passwd" value="" style="width:80%;" class="inputText" required>
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
																		<td class="label" style="width:29%">
																			<span class="mandatory" id="mandatorynome">
																				*
																			</span>
																			Confirmação Palavra-Chave:
																		</td>
																		<td class="cellcontent cellcontentwithinputtext">
																			<span id="spanCheckPassword">
																				<input type="password" name="checkPasswd" value="" style="width:80%;" class="inputText" onchange="checkPass()" required>
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
																		<td class="label" style="width:29%">
																			<span class="mandatory" id="mandatorynome">
																				*
																			</span>
																			Curso:
																		</td>
																		<td class="cellcontent cellcontentwithinputtext">
																			<select name="chosenCourse" id="idcourse" class="inputText">
																				<option value="LSTI" selected="selected">Sistemas e Tecnologias da Informação</option>
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
																		<td class="label" style="width:29%">
																			<span>
																				<input type="checkbox" name="checkTerms" value="true" id="checkTerm" required>
																			</span>
																		</td>
																		<td class="cellcontent cellcontentwithinputtext">
																			<span class="mandatory" id="mandatorynome">
																				*
																			</span>
																			Li e Aceito os <a href="/termandconditions" target="_black">termos e condições</a>
																			<br>
																			@if($msgerror == "*Campo Obrigatório")
																			<span style="color: red">
																				*Campo Obrigatório
																			</span>
																			@endif
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table class="zonemandatory" style="margin-left: 29%;">
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
									<tr>
										<td>
											<table class="zoneformbuttons" style="margin-left: 29%;">
												<tbody>
													<tr id="trBotaoPesquisar">
														<td>
															<input type="submit" value="Registar" class="button buttonFront">
															<a class="button buttonBack" href="/login">Cancelar</a>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="typeUser" value="student">
						</form>
						<div id="calendar" style="visibility: hidden;"></div>
					</div>
					<div id="contentContactos">
						<table width="100%">
							<tbody>
								<tr>
									<td>
										<div style="margin-bottom: 10px;">Caso necessite de ajuda, por favor não hesite em contactar-nos:</div>
										<div>gp2021grupob@gmail.com</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
	</div>
	</div>
</body>