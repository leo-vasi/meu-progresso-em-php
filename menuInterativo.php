<?php
function limparTela() {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system('cls');
    } else {
        system('clear');
    }
}

$executando = true;

limparTela();
echo "=================================\n";
echo "        MENU INTERATIVO          \n";
echo "=================================\n\n";


while ($executando) {
    echo "\nMENU PRINCIPAL:\n";
    echo "1. Ver a data e hora atual\n";
    echo "2. Calcular o quadrado de um número\n";
    echo "3. Contar até 10\n";
    echo "4. Limpar a tela\n";
    echo "0. Sair do programa\n";

    $opcao = readline("Digite sua opção: ");

    switch ($opcao) {
        case '1':
            echo "\nData e hora atual: " . date('d/m/Y H:i:s') . "\n";
            break;
            
        case '2':
            $numero = readline("Digite um número: ");
            if (is_numeric($numero)) {
                $quadrado = $numero * $numero;
                echo "\nO quadrado de $numero é: $quadrado\n";
            } else {
                echo "\nPor favor, digite um número válido!\n";
            }
            break;
        case '3':
            echo "\nContando até 10:\n";
            $i = 1;
            while ($i <= 10) {
                echo $i . " ";
                $i++;
                usleep(300000);
            }
            echo "\n";
            break;
            
        case '4':
            limparTela();
            break;
            
        case '0':
            echo "\nObrigado por usar o programa. Até logo!\n";
            $executando = false; // Isso fará com que o loop while termine
            break;
            
        default:
            echo "\nOpção inválida! Por favor, escolha uma opção do menu.\n";
    }
    
    if ($executando) {
        sleep(1);
    }
}

echo "Programa encerrado.\n";
?>