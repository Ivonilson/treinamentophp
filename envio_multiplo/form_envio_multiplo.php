<!DOCTYPE html>
  <html>
  <head lang="en">
      <meta charset="UTF-8">
      <title>Armazenando imagens no banco de dados Mysql</title>
  </head>
  <body>
  <h2>Selecione suas imagens</h2>
    
  <form enctype="multipart/form-data" action="upload_multiplo.php" method="post">
  <div>EVENTO&nbsp<input name="nome_evento_mult" type="text" required /></div>
  <div>DESCRIÇÃO&nbsp<input name="descricao_evento_mult" type="input" required /></div>    
  <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
      <div><input name="imagem_mult[]" type="file" required multiple="multiple"/></div>
      <div><input type="submit" value="Salvar"/></div>
  </form>
  <a href="pg_resultados_multiplos.php">Ver Dados Cadastrados</a>
  </body>
  </html>