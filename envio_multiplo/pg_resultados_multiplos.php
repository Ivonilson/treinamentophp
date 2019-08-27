<?php  
include '../conexao_db/conecta.php';

	try{
		$Visualizar = $conexao->prepare("SELECT descricao, foto0, foto1, foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9, foto10, foto11, foto12, foto13, foto14, foto15, foto16, foto17, foto18, foto19 FROM tbl_album_multiplo	");

		$Visualizar->execute();

		echo "FORAM ENCONTRADO(S) ".$Visualizar->rowCount()." REGISTRO(S).";
?>

<!DOCTYPE html>
<html>
<head>
	<title>VISUALIZAR IMAGENS MULTIPLAS</title>
	<link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../../css/abg.css">
	<link rel="stylesheet" type="text/css" href="../../../../css/cssabg.css">
</head>
<body>
	
<div class="container">
		<?php

		while($linha = $Visualizar->fetch(PDO::FETCH_NUM)){
		$qtd = 0;

		?>

		<h2>DESCRIÇÃO: <?=$linha[0]?></h2>
		<br>
		<div class="row justify-content-center">

		<?php

		while ($qtd < 20) {

		?>

		<div class="col-3 mt-10" style="width: 600; height: 200">
			<div class="card">
				<?php
					if($linha){
						echo "<img src='data:image/jpeg;base64,".base64_encode(@$linha[$qtd])."' class='card-img' alt='IMAGEM' height='200' width='600'/>";
					}
					
				?>
			</div>
		</div>
	<?php
		$qtd++;
		}

		?>
		</div>
		<br><br>
		<hr>
		<?php 
			}

		} catch(SQLException $e){
		echo "ERRO: ".$e->getMessage();
	}

	?>
</div>

<a href="form_envio_multiplo.php">VOLTAR</a>


<script type="text/javascript" src="../../../../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../../js/popper.min.js"></script>
<script type="text/javascript" src="../../../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../../js/abg.js"></script>
<script type="text/javascript" src="../../../../js/jsabg.js"></script>
</body>
</html>