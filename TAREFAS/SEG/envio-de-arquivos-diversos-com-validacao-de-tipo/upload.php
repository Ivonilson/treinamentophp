<?php 
include 'conexao.php';
//EXEMPLO IMPLEMENTADO APENAS COM 01 IMAGEM

if(isset($_FILES['ipt_img']) && $_FILES['ipt_img'] != NULL){

	//var_dump($_FILES['ipt_img']);

	$imagem = $_FILES['ipt_img']['tmp_name'];
	$tamanho = $_FILES['ipt_img']['size'];
	$tipo = $_FILES['ipt_img']['type'];
	$nome = $_FILES['ipt_img']['name'];
	$extensoes_permitidas = array('.jpg', '.gif', '.png');
	$extensao = strrchr($_FILES['ipt_img']['name'], '.');

	print_r($extensao);

	$ponteiro = fopen($imagem, "rb");
	$img = fread($ponteiro, $tamanho);
	$img = addslashes($img);
	fclose($ponteiro);

	if(in_array($extensao, $extensoes_permitidas) === true ){
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
		echo "<br>ARQUIVOS DO TIPO ".strtoupper($extensao)." NÃO SÃO PERMITIDOS. TENTE OUTRO TIPO DE ARQUIVO.";
	}
}

?>