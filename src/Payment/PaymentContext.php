<?php

// Contexto: Objeto principal que utiliza las estrategias. No sabe cuál es la estrategia concreta que se está utilizando, sino que interactúa con la interfaz común de las estrategias.

namespace Payment;

class PaymentContext {
    private PaymentStrategyInterface $strategy;

    public function setStrategy(PaymentStrategyInterface $strategy): void {
        $this->strategy = $strategy;
    }

    public function pay(float $amount): void {
        $this->strategy->pay($amount);
    }
}
