<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>WFT Crud Alteração de Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";

                /*Recebendo os dados da tag form do arquivo index.php */
                $id = $_POST['id'];
                $nome = $_POST['nome'];

                
                /*Instrução de exclusão dos dados */
                $sql = "DELETE FROM `usuario`  WHERE id = $id";


                /*Função que vai passar os dados para o BD */
                 if(mysqli_query($conn,$sql)){
                        mensagem("$nome excluido com sucesso", 'success');
                 }else{
                  mensagem("$nome Não excluido", 'danger');
                 }

                 
            ?>
            
            <a href='index.php'><button class='btn btn-primary'>Voltar</button></a> 
        </div>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
