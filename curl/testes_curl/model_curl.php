<?php  

	$cep = filter_input(INPUT_GET, 'ipt_cep');

	$link = "https://viacep.com.br/ws/$cep/json/";

	$chamar = curl_init($link);

	curl_setopt($chamar, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($chamar, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($chamar);

	curl_close($chamar);

	$dados = json_decode($response);

	function limpar(){
		 unsert($cep);
		 return $cep;
	}

?>