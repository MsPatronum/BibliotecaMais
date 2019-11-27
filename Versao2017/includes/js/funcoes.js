// JavaScript Document

	
	function carregando(retorno,mensagem){
		var elemento = "#"+retorno;
		$(elemento).html("");
		$(elemento).html("<img src='http://localhost/infoebook/imagens/loading.gif' height='20' width='20'> "+mensagem);
		}
		
	
	function carregandoTeste(retorno,mensagem){
		var elemento = "#"+retorno;
		$(elemento).html("");
		$(elemento).html("<div class='fundoLoad'><img src='http://localhost/infoebook/imagens/loading.gif' height='20' width='20'>"+mensagem+"</div>");

		/*$("<div class='fundoLoad'><img src='http://localhost/infoebook/imagens/loading.gif' height='20' width='20'>"+mensagem+"</div>").appendTo("body");*/
	}	


	function enviaDados(dados,arquivo,retorno,mensagem){
		
		var url = arquivo+".php";
		
		$.ajax({
				url:url,
				type:"POST",
				data:{valor:dados},
				beforeSend: carregandoTeste(retorno,mensagem),
				success: function(dados){
					$("#"+retorno).html(dados);
					}
			});	
			
		}	





	
