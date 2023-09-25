<?php

    $dbHost = 'LocalHost';
    $dbUserName = 'root';
    $dbPassword = 'Redesarah0909';
    $dbDatabaseName = 'formulario-gustavo';


    $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbDatabaseName);

   // if($conexao->connect_errno)
   // {
   //     echo "Erro";
   // }
   // else
   // {
   //     echo "Conexao sucess";
   // }

?>