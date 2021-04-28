<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <title>WFT Crud </title>
  </head>
  <body>
    
    <?php 
        include "conexao.php";
        include "functions.php";
        
        $busca = $_POST['busca'] ?? '';
        
        //Atribuição de pesquisa para a variável $sql
        $sql = "SELECT * FROM usuario WHERE nome LIKE '%$busca%'";

        //função que vai receber os dados do BD
        $dados = mysqli_query($conn, $sql);



    ?>
    
    <div class="container">
        <div class="row">
            <div class="col"> 
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" 
                        placeholder="Pesquise aqui..." aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0" 
                        type="submit">Pesquisar</button>
                    </form>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            /*Função para pecorrer todo o array no BD*/ 
                            while( $linha = mysqli_fetch_assoc($dados) ){
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $endereco = $linha['endereco'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $data_nascimento = $linha['data_nascimento'];
                                $data_nascimento = mostraData($data_nascimento);

                                /*Aqui vai exibir os dados recuperados do BD
                                e organizar na tabela.
                                */
                                echo "<tr>
                                        <td scope = 'row'>$nome</td>
                                        <td scope = 'row'>$endereco</td>
                                        <td scope = 'row'>$telefone</td>
                                        <td scope = 'row'>$email</td>
                                        <td scope = 'row'>$data_nascimento</td>
                                        <td width = '150px'>
                                            <a href='editar.php?id=$id' class='btn btn-warning btn-sm'>Editar</a>
                                            <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' 
                                            data-bs-target='#confirma' onclick=" .'"' ." getData('$id', '$nome')" . '"' 
                                            . ">
                                                Excluir
                                            </a>
                                        </td>
                                     </tr>";
                            }                        
                        
                        ?>

                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">Voltar para início</a>
            
            </div> 
        </div>
    </div>

  

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
            <button type="button" class="btn-close btn btn-success" data-bs-dismiss="modal" aria-label="Close">Fechar</button>
        </div>
        <div class="modal-body">
            <form action="excluir_script.php" method="POST">
                    <p>Deseja realmente excluir <b id="nome_pessoa"></b> ?</p>
                    
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="id_js" value="">
                <input type="hidden" name="nome" id="nome_pessoa_js" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
            </form>
        </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">

        function getData(id, nome){

            document.getElementById('nome_pessoa').innerHTML = nome
            document.getElementById('id_js').value = id
            document.getElementById('nome_pessoa_js').value =nome 

        }

    </script>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
