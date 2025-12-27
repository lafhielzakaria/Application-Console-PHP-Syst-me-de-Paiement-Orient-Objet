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
        $stmt = $this->pdo->prepare("INSERT INTO commandes (client_id, montant) VALUES (?, ?)");
        $stmt->execute([$clientId, $montant]);
    }

    public function getAllCommandes()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM commandes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}