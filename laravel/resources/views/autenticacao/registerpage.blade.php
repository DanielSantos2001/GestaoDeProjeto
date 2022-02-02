@extends('header')

<body class="bodyNovoRegisto">
		
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
		
		<div id="logAltRegisto" style="display: block;">
		
	   		<div class="logAltRegistoSub" style="width:50%">
	   			<div class="logAltRegistoSubA">
	   				<div id="imgLogAltCand">
					   <img src="/img/students.jpg" border="0">
					   <br><br>
					   </div>
	   			</div>
	   			
	   			<div class="logAltRegistoSubB" style="text-align:center">
				   <div class = "vertical"  style="border-left: 1px solid grey; height: 200px;  position:absolute; left: 50%;"></div>

		   			<span class="logAltRegistoBoxTitle">
		   				Alunos
		   			</span>

		   			<br><br>
					   Acesso ao Inforestudante por parte dos <b>Alunos</b> do Instituto Politécnico de Coimbra. <br> <br>
					   Poderá utilizar este sítio para levar a cabo uma <br>candidatura à Instituto Politécnico de Coimbra,<br> caso for estudante.
					   <div class="logAltRegistoBoxButton">
						   <br>
		   				<form action="preRegisto.do?args=12679170358201323" target="_parent" method="POST"><input type="submit" name="voltar" value="Candidatar" class="button"></form>
		   			</div>
	   			</div>
	   		</div>
   		
	   		<div class="logAltRegistoSub" style="width:50%">
	   			<div class="logAltRegistoSubA">
				   <div>
					   <img src="/img/company.png"  border="0">
					   <br><br>
					   </div>
	   			</div>
	   			<div class="logAltRegistoSubB" style="text-align:center">
		   			<span class="logAltRegistoBoxTitle" >
		   				Empresas
		   			</span>
					   <br><br>
					   Acesso ao Inforestudante por parte dos <b>Empresas</b> do Instituto Politécnico de Coimbra. <br> <br>
					   Poderá utilizar este sítio para levar a cabo uma <br>candidatura à Instituto Politécnico de Coimbra,<br> caso queira registar uma Empresa.
		   			
					   <div class="logAltRegistoBoxButton">
						   <br>
		   				<form action="preRegisto.do?args=12679170358232021" target="_parent" method="POST"><input type="submit" name="voltar" value="Candidatar" class="button"></form>
		   			</div>
	   			</div>
	   		</div>
	
		</div>
	
</body>