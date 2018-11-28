<?php 
	
	/*a função in_array() verifica se o conteúdo passado no 1º parâmetro está contido em algum índice do array passado no 2º parâmetro.*/
	$frutas = array('abacaxi', 'banana', 'caju', 'damasco');

	echo "<br>";

	if (in_array('abacaxi', $frutas)){
		echo "a item selecionado existe no array.";
	} else {
		echo "o item selecionado não existe no array.";
	}

?>