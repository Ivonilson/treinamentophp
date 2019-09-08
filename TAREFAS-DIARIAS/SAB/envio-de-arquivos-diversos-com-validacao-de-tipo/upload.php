<?php 
include 'conexao.php';
//EXEMPLO IMPLEMENTADO APENAS COM 01 IMAGEM
//pegando a imagem do formulário via GET

if(isset($_FILES['ipt_img']) && $_FILES['ipt_img'] != NULL){

	//var_dump($_FILES['ipt_img']);

	$imagem = $_FILES['ipt_img']['tmp_name'];
	$tamanho = $_FILES['ipt_img']['size'];
	$tipo = $_FILES['ipt_img']['type'];
	$nome = $_FILES['ipt_img']['name'];


	print_r($tipo);

	if(!empty($imagem)){

	$ponteiro = fopen($imagem, "rb");
	$img = fread($ponteiro, $tamanho);
	$img = addslashes($img);
	fclose($ponteiro);

	if($tipo == "image/jpeg"){
		try {
		$queryInserir = $conexao->prepare("INSERT INTO tbl_img (imagem) values ('$img')");

		if($queryInserir->execute()){
			//header("location: form.php");
			echo "<br>Registro inserido com sucesso.";

		} else {
			echo "Query passou, mas o dado não foi inserido.";
		}


	} catch (SQLException $erro) {
		echo "<br>Erro ao inserir Registro: ".$erro->getMessage();
	}

	} else {
		echo "<br>Tipo de arquivo inválido. O sistema só aceita imagem do tipo jpeg.";
	}

	} else {
		header("location: form.php");
		//echo "NENHUM ARQUIVO FOI SELECIONADO.";
	}
}

?>