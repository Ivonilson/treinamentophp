<!DOCTYPE html>
<html>
<head>
	<title>FORM RESULTADOS</title>
</head>
<body>

  <table border="1" align="center">
    <tr>
      <td align="center">
        <strong>CÓDIGO</strong>
      </td>
      <td align="center">
       <strong>TÍTULO</strong>
      </td>
      <td align="center">
        <strong>DESCRIÇÃO</strong>
      </td>
      <td align="center">
        <strong>NOME DA IMAGEM</strong>
      </td>
      <td align="center">
        <strong>TAMANHO</strong>
      </td>
      <td align="center">
       <strong>TIPO DE ARQUIVO</strong>
      </td>
      <td align="center">
       <strong>IMAGEM</strong>
      </td>
      <td align="center">
       <strong>GERENCIAR</strong>
      </td>
    </tr>

    <?php  
    require ('../conexao_db/conecta.php');

    try {

    $querySelecao = $conexao->prepare("SELECT codigo, evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem FROM tbl_imagem");

    $querySelecao->execute();

    echo "A TABELA POSSUI " .$querySelecao->rowCount()." REGISTRO(S)";

    while ($linha = $querySelecao->fetch(PDO::FETCH_ASSOC)) {

    	  ?>

   	<tr>
   		<td align="center"><?=$linha['codigo']?></td>
   		<td align="center"><?=$linha['evento']?></td>
   		<td align="center"><?=$linha['descricao']?></td>
   		<td align="center"><?=$linha['nome_imagem']?></td>
   		<td align="center"><?=$linha['tamanho_imagem']?></td>
   		<td align="center"><?=$linha['tipo_imagem']?></td>
   		<td align="center">
   			<?php 
   				echo "<img src='data:image/jpeg;base64,".base64_encode($linha['imagem'])."' width=200 heigth=200/>";
   				echo '<br><a href="pg_visualizar_imagens.php?id='.$linha['codigo'].'">AMPLIAR FOTO '.$linha['codigo'].'</a>';
   			?>
   		</td>
   		<td align="center">
   			<?php
   				echo '<a href="excluir_imagem.php?id='.$linha['codigo'].'">EXCLUIR</a>';
   				echo '<br><br><a href="form_editar_imagem.php?id='.$linha['codigo'].'">EDITAR</a>';
   			?>
   		</td>
   		
   	</tr>

   	<?php

    }

      } catch (SQLException $error){
    echo $error->getMessage();
  	}
    

    ?>

  </table>
  <a href="form_enviar_imagem.php">Cadastrar Nova Imagem</a>

</body>
</html>