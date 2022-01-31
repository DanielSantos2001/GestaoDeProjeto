<html xmlns:v="”urn:schemas-microsoft-com:vml”" lang="PT" xml:lang="PT">
    
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=9">  <!-- IE 9 -->
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../util/obtemConteudoFicheiroImagemDadosLayoutInstituicao.do?codigo=IMAGEM_FAVICON&amp;v=1643324209026">
		<link rel="stylesheet" type="text/css" href="../css/nonio_alunos.css?v=1643324203147">
		<link rel="stylesheet" type="text/css" href="../css/css-PRT-CLOUD/nonio_alunos.css?v=1643324203147">
		<link rel="stylesheet" type="text/css" href="../css/calendar.css?v=1643324203147">
		<link rel="stylesheet" type="text/css" href="../css/chosen.css?v=1643324203147">
		<link rel="stylesheet" type="text/css" href="../css/mensagens.css?v=1643324203147">
		<link rel="stylesheet" type="text/css" href="../util/obtemConteudoTextoLayoutInstituicao.do?codigo=CSS_INFORESTUDANTE&amp;v=1643324209026">	
		<script language="javascript" type="text/javascript" src="../js/functions.js?v=1643324203147"></script>
		<script language="javascript" type="text/javascript" src="../js/jquery.js?v=1643324203147"></script>
		<script language="javascript" type="text/javascript" src="../js/DynamicOptionList.js?v=1643324203147"></script>
		<script language="javascript" type="text/javascript" src="../js/calendar.js?v=1643324203147"></script>
		<script language="javascript" type="text/javascript" src="../js/chosen.jquery.js?v=1643324203147"></script>
		<title>GEA - Gestor Estagios Academicos</title>
		
					
		
		
	<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>
	
	<body onload="initDynamicOptionLists();">
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
			<tbody><tr>
				<td>
					<table class="zone">
						<tbody><tr>
							<td>
								<table class="horizontalline">
									<tbody><tr>
										<td class="subtitle">
											<h1>Alunos Com conta de e-mail do Instituto Politécnico de Coimbra ou Empresas com Registo de email na plataforma</h1>
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
				<table class="zonebuttons">
					<tbody><tr>
						<td>	
							<a href="/log" class="buttonBack"><span>Voltar à Página de Autenticação</span></a>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
	</tbody></table>  
    
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