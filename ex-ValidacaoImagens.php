<?php
 // Array com as extensões permitidas
 $extensoes_permitidas = array('.jpg', '.gif', '.png');

 // Faz a verificação da extensão do arquivo enviado
 $extensao = strrchr($_FILES['NOME-CAMPO-FILE']['name'], '.');

 // Faz a validação do arquivo enviado
 if(in_array($extensao, $extensoes_permitidas) === true)
 {
  echo 'Extensão permitida. Arquivo recebido com sucesso.';
 }
 else
 {
  echo 'Por favor, envie arquivos com as seguintes extensões: jpg, gif ou png.';
 }
?>