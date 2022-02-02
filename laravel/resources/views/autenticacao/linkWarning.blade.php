@extends('header')
	
	<body >
		<div id="master">
			<div id="container">
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
					<tbody><tr>
						<td class="hidden-tablet hidden-phone">
		
						</td>
						<td class="hidden-phone">
							
						</td>
						<td>
							
				 			
				 			
						</td>		
					</tr>
				</tbody></table>
			</td>
		</tr>								
	</tbody>
</table>							


		
		
				</div>
				
				<div id="centralarea" style="display: block;">
				
					<div id="separatorsArea" class="separadorNoMenu">
						<div><div id="separators">Dados de acesso ao GEA</div></div>
					</div>
					
					<div id="contentGlobal">
						<div id="content" class="conteudo2">
   	<table class="page" style="padding: 0px;">
			<tbody>
            <tr>
				<td>
					<table class="zone">
						<tbody><tr>
							<td>
								<table class="horizontalline">
									<tbody><tr>
										<td class="subtitle">
											<h1>Alunos Com conta de e-mail do Instituto Politécnico de Coimbra</h1>
										</td>
									</tr>
								</tbody></table>
							</td>		
						</tr>
						<tr>
							<td>
								<table class="zonecontent cellcontent" style="width: 100%;">
									<tbody><tr>
										<td style="padding-bottom: 10px;">
											Todos os alunos com conta de e-mail institucional podem autenticar-se no sistema utilizando:
										</td>
									</tr>
									<tr>
										<td style="padding-bottom: 10px;">
											<b>Utilizador:</b> Endereço de e-mail do Instituto Politécnico de Coimbra
										</td>
									</tr>
									<tr>
										<td>
											<b>Palavra-chave:</b> Palavra-chave que inseriram no seu registo de conta
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
            <tr>
            <td>
					<table class="zone">
						<tbody><tr>
							<td>
								<table class="horizontalline">
									<tbody><tr>
										<td class="subtitle">
											<h1>Empresas com conta de e-mail registada no sistema</h1>
										</td>
									</tr>
								</tbody></table>
							</td>		
						</tr>
						<tr>
							<td>
								<table class="zonecontent cellcontent" style="width: 100%;">
									<tbody><tr>
										<td style="padding-bottom: 10px;">
											Todos os utilizadores empresa com conta de e-mail registada podem autenticar-se no sistema utilizando:
										</td>
									</tr>
									<tr>
										<td style="padding-bottom: 10px;">
											<b>Utilizador:</b> Endereço de e-mail registado no sistema
										</td>
									</tr>
									<tr>
										<td>
											<b>Palavra-chave:</b> Palavra-chave que inseriram no seu registo de conta
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
            </tr>
		<tr>
			<td>
				<table class="zonebuttons">
		<tbody><tr>
						<td>	
							<a href="/" class="buttonBack"><span>Voltar à Página de Autenticação</span></a>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
	</tbody>
</table>  
    
							<div id="calendar"></div>
						</div>
					</div>
					<div class="clear">&nbsp;</div>
					
				</div>
			</div>
			
			<div class="push"></div>
		</div>
		
		<div class="footer">
			

















	
	



















<div class="footerTable">
	<div class="footerTableBody">
		<div class="footerTableRow">
			<div class="footerTableLeft">
				
					
					&nbsp;
									
			</div>
			
			<div class="footerTableMiddle">
				<table class="footerLogo">
					<tbody><tr>
						<td width="100%">
							&nbsp;
						</td>
					</tr>
				</tbody></table>
			</div>
			<div class="footerTableRight">
				2022&nbsp;·&nbsp;IPC&nbsp;·&nbsp;
			</div>
		</div>
	</div>
</div>

		
		
		</div>
	


		


<script language="javascript" type="text/javascript" src="../js/jquery.sortElements.js?v=1643324203147"></script>
<script language="javascript" type="text/javascript" src="../js/jquery.sortElements_aplicacao.js?v=1643324203147"></script>

<script language="javascript" type="text/javascript">
	$().ready(function(){
		$(".button, .botaoVoltar, .botaoGravar").each(function(){
			var texto = $(this).attr('name');
			
			if(texto != undefined){
				if($.trim(texto.toUpperCase()) == 'org.apache.struts.taglib.html.CANCEL'.toUpperCase()){
					if(!$(this).hasClass('buttonBack'))
						$(this).addClass('buttonBack');
				}else{
					if(!$(this).hasClass('buttonFront'))
						$(this).addClass('buttonFront');
				}
			}
		});
		
		$("td.cellcontent,td.cellcontentLarge,td.cellcontentExtraSmall,td.cellcontentSmall").each(function(){
			$(this).has('.inputText').addClass('cellcontentwithinputtext');
		});
		
		// Focar o primeiro elemento definido com a classe 'focarPrimeiroElemento' na pagina 
		$(".focarPrimeiroElemento:visible:enabled:first").focus();
	});
</script></body></html>