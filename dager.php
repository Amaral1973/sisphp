<?php
    $arquivo = fopen('pessoa.txt', 'r');
    while(!feof($arquivo)){
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $masculino = 0;
    foreach($pessoa as $valor){
        if($valor == "Masculino"){
            $masculino++;
        }
    }
    $feminino = 0;
        foreach($pessoa as $valor){
            if($valor == "Feminino"){
                $feminino++;
            }
        }
        $outros = 0;
        foreach($pessoa as $valor){
            if($valor == "Outro"){
                $outros++;
            }
        }
        echo "<b>Masculino:</b> $masculino, pessoa(s) cadastradas.<br>";
        echo "<b>Feminino:</b> $feminino, pessoa(s) cadastradas.<br>";
        echo "<b>Outros:</b> $outros, pessoa(s) cadastradas.";
?>