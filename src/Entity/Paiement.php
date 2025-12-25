<?php
 include ".\src\Database\DatabaseConnection.php";
abstract class Payment
{
    protected int $id;
    protected float $amount;
    protected string $status;

    public function __construct(int $id, float $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->status = "pending";
    }
    abstract public function process(): void;

    public function getStatus(): string
    {
        return $this->status;
    }

    protected function markAsPaid(): void
    {
        $this->status = "paid";
    }
}
