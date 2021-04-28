<?php

    //Variáveis para conexão do sistema para o BD.
    $serve = "localhost";
    $user = "root";
    $password = "";
    $bd = "wtf_crud";

                //Instrução para conectar o sistema com o BD.
   if( $conn = mysqli_connect($serve, $user, $password, $bd) ){

       // echo 'Conexão ok';
   }else{
        //echo"ERRO";
    }

    function mensagem($text, $tipo){

        echo "<div class='alert alert-$tipo' role='alert'>
                $text
              </div>";
    };


?>