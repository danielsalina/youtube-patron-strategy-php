<?php

// Estrategia: Interfaz que define un método o conjunto de métodos que las estrategias concretas deben implementar.

namespace Payment;

interface PaymentStrategyInterface {
    public function pay(float $amount): void;
}
