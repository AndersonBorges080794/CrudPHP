<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>WFT Crud</title>
  </head>
  <body>

    <?php 
        include "conexao.php";
        
        $id = $_GET['id'] ?? '';
        $sql = "SELECT *FROM usuario WHERE id = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    
    
    ?>
    
    <div class="container">
    
        <div class="row">
            <div class="col">
            <h1>Editar Cadastrado</h1>
            <form action="edit_script.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                </div>
                <div class="form-group">
                    <label for="dt_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="index.php" class="btn btn-primary">Voltar para início</a>
                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
            </form>

            
            
            </div>
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
