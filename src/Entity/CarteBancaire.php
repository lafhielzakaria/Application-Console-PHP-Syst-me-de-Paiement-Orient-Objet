<?php
 include ".\src\Database\DatabaseConnection.php";
class CarteBancaire extends Payment
{
    private string $cardNumber;
    private string $cardHolder;
    private string $expirationDate;
    public function __construct(
        int $id,
        float $amount,
        string $cardNumber,
        string $cardHolder,
        string $expirationDate,
    ) {
        parent::__construct($id, $amount);
        $this->cardNumber = $cardNumber;
        $this->cardHolder = $cardHolder;
        $this->expirationDate = $expirationDate;
    }

    public function process(): void
    {
        if ($this->amount > 0) {
            $this->markAsPaid();
        }
    }
}
