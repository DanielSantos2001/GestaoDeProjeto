@extends('header')

<body>
	<div id="master">
		<div id="header">

			<table class="headerTable">
				<tbody>
					<tr>
						<td>
							<a href="">
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
					<a href="../security/init.do"><span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">Início<span class="arrow"></span></span></a>
					<span style="z-index: 1;" class=" lastArrow">Registo<span class="arrow"></span></span>
					<br>
				</div>
				<br>
			</div>

			<div id="centralarea">

				<div id="contextWithoutMenuWithContacts">

				</div>

				<div id="separatorsArea" class="separadorNoMenu">
					@if($user->USER_TYPE == "empresa")
						<div id="separators">Registo On-line - Gestão de Estágios Académicos - Utilizador Empresa</div>
					@endif
					@if ($user->USER_TYPE == "estudante")
						<div id="separators">Registo On-line - Gestão de Estágios Académicos - Utilizador Estudante</div>	
					@endif
					@if ($user->USER_TYPE == "admin")
						<div id="separators">Registo On-line - Gestão de Estágios Académicos - Utilizador Administrador</div>	
					@endif
					@if ($user->USER_TYPE == "admindocente")
						<div id="separators">Registo On-line - Gestão de Estágios Académicos - Utilizador Administrador Docente</div>	
					@endif
				</div>

				<div id="contentGlobal">
					<div id="content" class="conteudo">
						@if ($user->USER_TYPE == "empresa")
							<form id="register" method="post" action="/users.create.acccompany">
						@endif	
						@if ($user->USER_TYPE == "estudante")
							<form id="register" method="post" action="/users.create.accstudent">
						@endif
						@if ($user->USER_TYPE == "admin")
							<form id="register" method="post" action="/users.create.accadmin">
						@endif
						@if ($user->USER_TYPE == "admindocente")
							<form id="register" method="post" action="/users.create.accadmindocente">
						@endif
							@csrf
							<input type="hidden" name="username" value="{{$user->USER_NAME}}">
							<input type="hidden" name="email" value="{{$user->USER_MAIL}}">
							<input type="hidden" name="userpass" value="{{$user->USER_PWD}}">
							@if($user->USER_TYPE == "estudante")
								<input type="hidden" name="usercourse" value="{{$user->USER_COURSE}}">
							@endif
							@if($user->USER_TYPE == "empresa")
								<input type="hidden" name="usercontact" value="{{$user->USER_CONTACT}}">
								<input type="hidden" name="useraddress" value="{{$user->USER_ADDRESS}}">
							@endif
							@if($user->USER_TYPE == "admindocente")
								<input type="hidden" name="usercourse" value="{{$user->USER_COURSE}}">
							@endif
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
																			
																			Nome: 
																		</td>
																		<td class="cellcontent">
																			<span id="spanTextPessNome">
																				{{$user->USER_NAME}}
																			</span>

																		</td>
																	</tr>
																	<tr>
																		<td class="label">
																			
																			E-mail: 
																		</td>
																		<td class="cellcontent">
																			<span id="spanTextPessEmail">
																				{{$user->USER_MAIL}}
																			</span>
																		</td>
																	</tr>
																	@if($user->USER_TYPE == "empresa")		
																		<tr>
																			<td class="label" style="width:29%">
																				
																				Contacto: 
																			</td>
																			<td class="cellcontent">
																				<span id="spanTextContact">
																					{{$user->USER_CONTACT}}
																				</span>

																			</td>
																		</tr>

																		<tr>
																			<td class="label" style="width:29%">
																				
																				Morada: 
																			</td>
																			<td class="cellcontent">
																				<span id="spanTextAddress">
																					{{$user->USER_ADDRESS}}
																				</span>

																			</td>
																		</tr>
																	@endif		
																	@if($user->USER_TYPE == "admindocente")		
																		<tr>
																			<td class="label" style="width:29%">
																				
																				Curso: 
																			</td>
																			<td class="cellcontent">
																				<span id="spanTextCurso">
																				@if($user->USER_COURSE == "LSTI")
																					<p>	Sistemas e Tecnologias da Informação </p>
																				@endif
																				@if($user->USER_COURSE == "LEI")
																					<p>	Engenharia Informática </p>
																				@endif
																				@if($user->USER_COURSE == "LBG")
																					<p>	Gestão Bioindústria </p>
																				@endif
																				@if($user->USER_COURSE == "LG")
																					<p>	Gestão </p>
																				@endif
																				@if($user->USER_COURSE == "LM")
																					<p>	Marketing </p>
																				@endif
																				@if($user->USER_COURSE == "LDROT")
																					<p>	Desenvolvimento Regional e Ordenamento do Território </p>
																				@endif
																				@if($user->USER_COURSE == "LII")
																					<p>	Informática Industrial </p>
																				@endif
																				@if($user->USER_COURSE == "LCA")
																					<p>	Contabilidade </p>
																				@endif
																				</span>
																			</td>
																		</tr>
																	@endif	
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
											<table class="zoneformbuttons" style="margin-left: 29%;">
												<tbody>
													<tr id="trBotaoPesquisar">
														<td>
															
															<input type="submit" value="Confirmar" class="button buttonFront">
															<input type="submit" name="CANCEL" value="Cancelar" onclick="bCancel=true;" class="button buttonBack">
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
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