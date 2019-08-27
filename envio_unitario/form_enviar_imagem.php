<!DOCTYPE html>
  <html>
  <head lang="en">
      <meta charset="UTF-8">
      <title>Armazenando imagens no banco de dados Mysql</title>
  </head>
  <body>
  <h2>Selecione um novo arquivo de imagem</h2>
    
  <form enctype="multipart/form-data" action="upload.php" method="post">
  <div>EVENTO&nbsp<input name="nome_evento" type="text" required /></div>
  <div>DESCRIÇÃO&nbsp<input name="descricao_evento" type="input" required /></div>    
  <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
      <div><input name="imagem" type="file" required/></div>
      <div><input type="submit" value="Salvar"/></div>
  </form>
  <a href="pg_resultados.php">Ver Dados Cadastrados</a>
  </body>
  </html>
