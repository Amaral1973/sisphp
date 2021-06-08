<?php
    $pessoa = array("nome" => "", "datanascimento" => "", "celular" => "", "sexo" => "");

    $nome = $_POST['nome'];
    $datanascimento = $_POST['datanascimento'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];

    array_push($pessoa, $pessoa['nome']=$nome, $pessoa['datanascimento']=$datanascimento, $pessoa['celular']=$celular, $pessoa['sexo']=$sexo);

    print_r($pessoa);
?>