<?php
    $arquivo = fopen("pessoa.txt", "r");
    $arquivo2 = fopen("pessoa2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    print_r($pessoa);
    echo "<br><br><br>";
    $posicao = $_GET['posicao'];
    $data = $_POST['datanascimento'];
    $databr = implode("/",array_reverse(explode("-",$data)));
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $databr;
    $pessoa[$posicao+2] = $celular;
    $pessoa[$posicao+3] = $sexo;
    unlink("pessoa.txt");
    rename("pessoa2.txt", "pessoa.txt");
    $arquivo = fopen("pessoa.txt", "a+");
    $contador = count($pessoa);
    $i = 0;
    while($i <= $contador - 1)
    {
        $gravar = $pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo);
    echo "<script>
            alert('Contato editado com sucesso!');
            window.location.href='dados.php';
         </script>";
?>