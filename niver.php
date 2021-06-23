<?php
    $arquivo = fopen('pessoa.txt', 'r');
    while(!feof($arquivo)){
        $niver = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $mes = date("m");
    
    $numero = count($niver);
    $i = 0;
    while($i <= $numero-4){
        $mesarray = explode("/", $niver[$i+1]);
        $month = $mesarray[1];
        if ($mes == $month){
            echo $niver[$i]."&nbsp;&nbsp;";
            echo $niver[$i+1]."<br>";
        }
        $i = $i+4;
    }
?>