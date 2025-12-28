<?php

class PaiementRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Database()->getConnection();
    }

    public function processPayment($orderId, $paymentType, $amount)
    {
        $stmt = $this->pdo->prepare("INSERT INTO payments (orderId, paymentType, amount, status) VALUES (?, ?, ?, 'pending')");
        $stmt->execute([$orderId, $paymentType, $amount]);
        return $this->pdo->lastInsertId();
    }
}