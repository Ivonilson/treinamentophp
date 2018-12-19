<script type="text/javascript">
	

		var form = document.getElementById('form');
		var cep = document.getElementById('cep');


		form.addEventListener('submit', function(e){

			alert(cep.value);

			e.preventDefault();
		});

		alert(cep);

</script>

<?php  

	/*pegando o valor do CEP do form formulario.php via JS e carregando o mesmo na variável php*/

	//$CEP = echo "<script></script>"
	

?>