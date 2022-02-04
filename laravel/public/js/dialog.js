
				
		var larguraJanela = $(window).width();
		var alturaJanela = $(window).height();
		
		var larguraEcraModalPoliticasPrivacidade = larguraJanela * 0.6;
		var alturaEcraModalPoliticasPrivacidade = alturaJanela * 0.8;
		
		function apresentarEcraModalPrivacidade(){
				
		}
						
		function abrirEcraModalPrivacidade(){
			criarEcraModal();
			$('#ecraModalPoliticaPrivacidade').html($('#emptyDiv').html());
			$('#ecraModalPoliticaPrivacidade').dialog('open');
			obterConteudoEcraModal();
		}			

		function criarEcraModal(){
			$("#ecraModalPoliticaPrivacidade").dialog({
				resizable: false,				
				draggable: false,
				autoOpen: false,
				width: larguraEcraModalPoliticasPrivacidade,				
				position: ['center', 100],
				minHeight: 'auto',
				
					modal: true
					
				
			});
		}
		
		function obterConteudoEcraModal(){
			var link = "../util/politicaPrivacidade.do?args=12884990509208668";
			$.ajax({
				url : link,
				type : 'post',
				async : false,
				success: function(conteudo){
					$("#ecraModalPoliticaPrivacidade").html(conteudo);
					
					$('#ecraModalPoliticaPrivacidadeSubmeter').click(function(e) {
						$("#ecraModalPoliticaPrivacidadeSubmeter").hide();
						$("#ecraModalPoliticaPrivacidadeLoading").show();								
					});
		
				}
			});
			$("#divFormPoliticaDePrivacidade").css("max-height", alturaEcraModalPoliticasPrivacidade - 110);
		}