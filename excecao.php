<?php

class MinhaExcecao extends Exception {
    public function mensagemPersonalizada() {
        return "Erro [{$this->getCode()}]: {$this->getMessage()} - Ocorrido no arquivo {$this->getFile()} na linha {$this->getLine()}";
    }
}

function verificarIdade($idade) {
    if ($idade < 18) {
        throw new MinhaExcecao("Idade mínima não atingida!", 1001);
    }
    return "Acesso permitido!";
}

try {
    echo verificarIdade(16);
} catch (MinhaExcecao $e) {
    echo $e->mensagemPersonalizada();
}
?>
