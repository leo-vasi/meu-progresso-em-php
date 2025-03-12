<?php
function gerarSenha($tamanho = 12) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $senha = '';
    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $chars[random_int(0, $maxIndex)];
    }

    return $senha;
}

echo "Senha gerada: " . gerarSenha(16);
?>
