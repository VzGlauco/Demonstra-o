<?php

    require_once 'funcoes.php';

    conexao();

    
    $nome =         $_POST['nome'];
    $sobrenome =    $_POST['sobrenome'];
    $sexo =         $_POST['sexo'];
    $data =         $_POST['data'];
    $email =        $_POST['email'];

    $sql = "INSERT INTO `cadastros`(`nome`, `sobrenome`, `sexo`, `data`, `email`) VALUES ('$nome','$sobrenome','$sexo','$data','$email')";

    adicionar($sql);

    header('location:novo.php');    

	
?>