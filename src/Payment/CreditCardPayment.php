<?php

// Estrategia concreta: Son las implementaciones específicas de la estrategia que contienen el algoritmo real (PaymentStrategyInterface.php).

namespace Payment;

class CreditCardPayment implements PaymentStrategyInterface {
    public function pay(float $amount): void {
        echo "Pagando $amount con tarjeta de crédito.\n";
    }
}
