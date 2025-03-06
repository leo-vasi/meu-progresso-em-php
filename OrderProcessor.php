<?php

class OrderProcessor {
    private float $customerBalance;
    private bool $isBlacklisted;
    private int $orderAmount;
    private int $customerLoyaltyPoints;

    public function __construct(float $balance, bool $blacklisted, int $amount, int $loyaltyPoints) {
        $this->customerBalance = $balance;
        $this->isBlacklisted = $blacklisted;
        $this->orderAmount = $amount;
        $this->customerLoyaltyPoints = $loyaltyPoints;
    }

    public function processOrder(): string {
        if ($this->isBlacklisted) {
            return "Pedido negado: Cliente na lista de restrição.";
        }

        if (!$this->hasSufficientBalance()) {
            return "Pedido negado: Saldo insuficiente.";
        }

        if ($this->orderAmount > 5000 && $this->customerLoyaltyPoints < 100) {
            return "Pedido negado: Valor alto exige pelo menos 100 pontos de fidelidade.";
        }

        if ($this->orderAmount > 10000) {
            return "Pedido negado: Valor do pedido excede o limite permitido.";
        }

        return $this->finalizeOrder();
    }

    private function hasSufficientBalance(): bool {
        return $this->customerBalance >= $this->orderAmount;
    }

    private function finalizeOrder(): string {
        $this->customerBalance -= $this->orderAmount;
        return "Pedido aprovado! Novo saldo: R$ " . number_format($this->customerBalance, 2);
    }
}

$pedido = new OrderProcessor(3000.00, false, 2000, 50);
echo $pedido->processOrder();

?>
