<?php

class PaiementRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Database()->getConnection();
    }

    public function processPayment($commandeId, $paymentType)
    {
        $stmt = $this->pdo->prepare("INSERT INTO paiements (commande_id, type_paiement) VALUES (?, ?)");
        $stmt->execute([$commandeId, $paymentType]);
    }
}