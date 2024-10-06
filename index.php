<?php

// index.php

require 'vendor/autoload.php';

use Payment\PaymentContext;
use Payment\CreditCardPayment;
use Payment\PayPalPayment;
use Payment\BankTransferPayment;

// Crear el contexto de pago
$paymentContext = new PaymentContext();

// Pagar con tarjeta de crédito
$paymentContext->setStrategy(new CreditCardPayment());
$paymentContext->pay(100);

// Pagar con PayPal
$paymentContext->setStrategy(new PayPalPayment());
$paymentContext->pay(200);

// Pagar con transferencia bancaria
$paymentContext->setStrategy(new BankTransferPayment());
$paymentContext->pay(300);
