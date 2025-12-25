<?php
 include ".\src\Database\DatabaseConnection.php";
class PayPal extends Payment
{
    private string $email;

    public function __construct(int $id, float $amount, string $email)
    {
        parent::__construct($id, $amount);
        $this->email = $email;
    }

    public function process(): void
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->markAsPaid();
        }
    }
}
