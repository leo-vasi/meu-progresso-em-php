<?php

class Pedido {
    public $id;
    public $status;
    public $valor;
    public $metodoPagamento;
    public $clienteTipo;

    public function __construct($id, $status, $valor, $metodoPagamento, $clienteTipo) {
        $this->id = $id;
        $this->status = $status;
        $this->valor = $valor;
        $this->metodoPagamento = $metodoPagamento;
        $this->clienteTipo = $clienteTipo;
    }
}

function processarPedido(Pedido $pedido) {
    echo "Processando pedido #{$pedido->id}...\n";
    switch (true) {
        case ($pedido->status === 'pendente' && $pedido->valor > 1000):
            echo "Pedido de alto valor pendente - priorizar processamento\n";
            processarPagamento($pedido);
            break;
        case ($pedido->status === 'pendente'):
            echo "Pedido pendente - processando normalmente\n";
            processarPagamento($pedido);
            break;
        case ($pedido->status === 'pago'):
            echo "Pedido já pago - preparando para envio\n";
            prepararEnvio($pedido);
            break;
        case ($pedido->status === 'enviado'):
            echo "Pedido enviado - aguardando confirmação de entrega\n";
            switch ($pedido->clienteTipo) {
                case 'vip':
                    echo "Cliente VIP - enviar pesquisa de satisfação premium\n";
                    break;
                case 'regular':
                    echo "Cliente regular - enviar pesquisa de satisfação padrão\n";
                    break;
                default:
                    echo "Enviar email de acompanhamento genérico\n";
            }
            break;
        case ($pedido->status === 'entregue'):
            echo "Pedido entregue - finalizando processo\n";
            finalizarPedido($pedido);
            break;
        case ($pedido->status === 'cancelado'):
            switch (true) {
                case ($pedido->valor < 50):
                    echo "Pedido cancelado de baixo valor - arquivando\n";
                    break;
                case ($pedido->valor >= 50 && $pedido->valor < 200):
                    echo "Pedido cancelado de valor médio - enviar cupom de desconto\n";
                    break;
                case ($pedido->valor >= 200):
                    echo "Pedido cancelado de alto valor - entrar em contato com o cliente\n";
                    break;
            }
            break;
        default:
            echo "Status do pedido desconhecido: {$pedido->status}\n";
            registrarErro("Status desconhecido", $pedido);
    }

    echo "\n";
}

function processarPagamento(Pedido $pedido) {
    switch ($pedido->metodoPagamento) {
        case 'cartao_credito':
            echo "Processando pagamento via cartão de crédito...\n";
            break;
        case 'boleto':
            echo "Gerando boleto bancário...\n";
            break;
        case 'transferencia':
            echo "Aguardando confirmação de transferência...\n";
            break;
        case 'pix':
            echo "Gerando QR Code PIX...\n";
            break;
        default:
            echo "Método de pagamento não reconhecido\n";
    }
}

function prepararEnvio(Pedido $pedido) {
    echo "Preparando envio...\n";
}

function finalizarPedido(Pedido $pedido) {
    echo "Finalizando pedido no sistema...\n";
}

function registrarErro($mensagem, Pedido $pedido) {
    echo "ERRO: $mensagem - Pedido #{$pedido->id}\n";
}

$pedidos = [
    new Pedido(1001, 'pendente', 1200, 'cartao_credito', 'vip'),
    new Pedido(1002, 'pendente', 800, 'pix', 'regular'),
    new Pedido(1003, 'pago', 300, 'boleto', 'regular'),
    new Pedido(1004, 'enviado', 450, 'cartao_credito', 'vip'),
    new Pedido(1005, 'cancelado', 30, 'transferencia', 'regular'),
    new Pedido(1006, 'cancelado', 250, 'cartao_credito', 'vip'),
    new Pedido(1007, 'entregue', 150, 'pix', 'regular'),
    new Pedido(1008, 'desconhecido', 75, 'boleto', 'regular')
];

foreach ($pedidos as $pedido) {
    processarPedido($pedido);
}
?>