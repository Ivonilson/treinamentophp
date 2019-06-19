

$(document).ready(function(){
	//alert("OLA");
	//pesquisar sem refresh na página
	$("#cep").keyup(function(){
		var cep = $(this).val();

		//verificando se há algo digitado
		if(cep != ''){
			//criando um objeto
			var dados = {
				palavra : cep
			}

			//alert(dados.palavra);

			$.get("busca.php", dados, function(retorna){
			//resultados
			$(".resultado").html(retorna);
		});
	} else {
		$(".resultado").html('');
	}

	});
});

$(document).ready(function(){
	var $cep = $("#cep");
	$cep.mask('99999-999', {reverse : false});
});