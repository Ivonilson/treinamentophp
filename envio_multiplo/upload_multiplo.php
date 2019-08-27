<?php  

//require '../conexao_db/conecta.php';

/*

CREATE TABLE IF NOT EXISTS `tbl_album_multiplo` (
	codigo int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	evento varchar(50) NOT NULL,
	descricao varchar(255) NOT NULL,
	foto0 longblob,
	foto1 longblob,
	foto2 longblob,
	foto3 longblob,
	foto4 longblob,
	foto5 longblob,
	foto6 longblob,
	foto7 longblob,
	foto8 longblob,
	foto9 longblob,
	foto10 longblob,
	foto11 longblob,
	foto12 longblob,
	foto13 longblob,
	foto14 longblob,
	foto15 longblob,
	foto16 longblob,
	foto17 longblob,
	foto18 longblob,
	foto19 longblob

) engine = MyISAM;

*/

$evento = filter_input(INPUT_POST, 'nome_evento_mult');
$descricao = filter_input(INPUT_POST, 'descricao_evento_mult');
$imagens = $_FILES['imagem_mult']['tmp_name'];
$tamanho = $_FILES['imagem_mult']['size'];
$nome = $_FILES['imagem_mult']['name'];

//$foto = array();
$conteudo = array();

var_dump($nome);



$contador = 0;

while ($contador < 20) {
		@$fp = @fopen(@$imagens[@$contador], "rb");
		array_push($conteudo, @fread($fp, $tamanho[$contador]));
		$conteudo[$contador] = @addslashes($conteudo[$contador]);
		@fclose(@$fp);
		//echo "<br>".$contador;
		$contador++;
	}
	
$foto0 = $conteudo[0];
$foto1 = $conteudo[1];
$foto2 = $conteudo[2];
$foto3 = $conteudo[3];
$foto4 = $conteudo[4];
$foto5 = $conteudo[5];
$foto6 = $conteudo[6];
$foto7 = $conteudo[7];
$foto8 = $conteudo[8];
$foto9 = $conteudo[9];
$foto10 = $conteudo[10];
$foto11 = $conteudo[11];
$foto12 = $conteudo[12];
$foto13 = $conteudo[13];
$foto14 = $conteudo[14];
$foto15 = $conteudo[15];
$foto16 = $conteudo[16];
$foto17 = $conteudo[17];
$foto18 = $conteudo[18];
$foto19 = $conteudo[19];

try {
	$Inserir = $conexao->prepare("INSERT INTO tbl_album_multiplo (evento, descricao, foto0, foto1, foto2,foto3, foto4, foto5, foto6, foto7, foto8, foto9, foto10, foto11, foto12, foto13, foto14, foto15, foto16, foto17, foto18, foto19) values ('$evento', '$descricao', '$foto0', '$foto1','$foto2', '$foto3', '$foto4', '$foto5', '$foto6', '$foto7', '$foto8', '$foto9', '$foto10', '$foto11', '$foto12', '$foto13', '$foto14', '$foto15', '$foto16', '$foto17', '$foto18', '$foto19')");

	$Inserir->execute();

	echo "DADOS INSERIDOS COM SUCESSO.";

} catch(PDOException $erro ){
	echo "ERRO: ".$erro->getMessage();
}

/*LINKS DE AJUDA PARA ESTE TÓPICO 
https://forum.imasters.com.br/topic/437538-mega-tutorial-upload-simples-e-multiplo/

http://excript.com/php/foreach-php.html

*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD DOS ARQUIVOS</title>
</head>
<body>
	<a href="pg_resultados_multiplos.php">VER IMAGENS</a>
</body>
</html>