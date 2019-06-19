<?php
	$nome = filter_input(INPUT_POST, 'nome');
	$idade = filter_input(INPUT_POST, 'idade');

	echo json_encode("Meu nome é: ".$nome."<br>"."Minha idade é: ".$idade);


?>