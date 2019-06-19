<?php 
	
		//CARREGAR CEP USANDO BIBLIOTECA EXTERNA - VIA CEP
			@$cep = $_POST['palavra'];

			$link = "https://viacep.com.br/ws/$cep/json/";
			$chamar = curl_init($link);

			curl_setopt($chamar, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($chamar, CURLOPT_SSL_VERIFYPEER, 0);

			$response = curl_exec($chamar);

			$resultado = json_decode($response);

			if($resultado == null || @$resultado->erro == true){
				echo " - Cep não localizado.";
			} else {
				echo "<br>CIDADE/UF<input type='text' value='".$resultado->localidade."/".$resultado->uf."'>";
			}



?>