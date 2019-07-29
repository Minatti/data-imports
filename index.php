<?php 
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">

      .container 
      {
        width: 100%;
        margin-top: 5%;
      }

      .section 
      {
        position: relative;
        left: 32.5%;
        width: 35%;
        margin-top: 5%;
      }
    </style>
    <title>Processador de dados</title>
  </head>
  <body class="bg-dark">
    <div class="container">
      <h1 class="text-light text-center">IMPORTAÇÃO DE ARQUIVOS (BETA)</h1> 
    </div>
      <div class="section shadow-lg p-3 mb-5 bg-white rounded">
        <?php 

        if (isset($_SESSION['mensagem']))
    
        {
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
              
        }
        ?>
             
          <form method="post" action="processa.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="text-dark" for="inputSel">String de conexão:</label>
                <select class="form-control" name="bd">              
                    <option></option>
                    <option value="bradesco_comercial">BRD</option>
                    <option value="2">Op 2</option>
                    <option value="3">Op 3</option>
                    <option value="4">Op 4</option>
                    <option value="5">Op 5</option>
                </select>
              </div>           
              <div class="form-group">
                <label class="text-primary" for="inputArquivo">Por favor, selecione o arquivo conforme o credor!</label>
                <input type="file" class="form-control-file" name="arquivo">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-dark col-sm-12" value="Importar Arquivo">
              </div>
        </form> 
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>