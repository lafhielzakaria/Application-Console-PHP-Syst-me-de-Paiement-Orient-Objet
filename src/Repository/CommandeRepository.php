<?php

class CommandeRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Database()->getConnection();
    }

    public function createCommande($clientId, $montant)
    {
        $checkStmt = $this->pdo->prepare("SELECT id FROM clients WHERE id = ? ");
        $checkStmt->execute([$clientId]);        
        if (!$checkStmt->fetch()) {
            echo "Error: Client with ID $clientId does not exist\n";
            return false;
        }
        $stmt = $this->pdo->prepare("INSERT INTO orders (clientId, amount) VALUES (?, ?)");
        $stmt->execute([$clientId, $montant]);
        return true;
    }
    public function getAllCommandes()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM orders");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}