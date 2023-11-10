<?php
    $servidor = "localhost";
    $user = "localhost";
    $senha = "";
    $nome = "divwork";

    function banco($servidor, $user, $senha, $nome, $sql){
        $conexao = mysqli_connect($servidor, $user, $senha, $nome);
        $consulta= mysqli_query($conexao, $sql);
        $conexao->close();
        return $consulta;
    }


?>