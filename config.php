<?php
    

    $dbHost = 'Localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dataName ='formulario-integra';


    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dataName);
    if($conexao->connect_errno){
        echo "ERRO";
    }
    else{
        echo"CONEXAO EFETUADA COM SUCESSO";
    }

