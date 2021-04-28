<?php 

    /*Função para inverter a data de nascimento */
    function mostraData($data){
        $d = explode('-', $data);
        $escreve = "$d[2]/$d[1]/$d[0]";

        return $escreve;
    }



?>