<!DOCTYPE html>
  <html>
  <head lang="en">
      <meta charset="UTF-8">
      <title>Fazendo upload de arquivos</title>
  </head>
  <body>
  <h2>Selecione suas imagens</h2>
    
  <form enctype="multipart/form-data" action="recebe-upload.php" method="POST">   

      <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
      <input name="files[]" type="file" multiple="multiple"/>
      <input type="submit" value="Salvar"/>

  </form>

  </body>
  </html>