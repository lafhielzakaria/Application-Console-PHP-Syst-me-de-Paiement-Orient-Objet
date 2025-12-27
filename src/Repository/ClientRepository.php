<?php
class ClientRepository
{
    private $pdo;   
    public function __construct()
    {
        $this->pdo = new Database()->getConnection();
    }
    public function createClient($name, $email)
    {
        $stmt = $this->pdo->prepare("INSERT INTO clients (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);
    }
    
    public function getAllClients()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM clients");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}