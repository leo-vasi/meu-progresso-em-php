<?php
$arquivo = "exemplo.txt";

$handle = fopen($arquivo, "w");

if ($handle) {
    $conteudo = "Olá, este é um exemplo de manipulação de arquivos em PHP!";
    fwrite($handle, $conteudo);
    fclose($handle);
    echo "Arquivo criado e escrito com sucesso!";
} else {
    echo "Erro ao criar o arquivo!";
}

?>
