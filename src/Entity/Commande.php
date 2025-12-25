<?php
 include ".\src\Database\DatabaseConnection.php";
class Command
{
    private int $id;
    private Client $client;
    private float $amount;
    private string $status;

    public function __construct(int $id, Client $client, float $amount)
    {
        $this->id = $id;
        $this->client = $client;
        $this->amount = $amount;
        $this->status = "pending";
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
