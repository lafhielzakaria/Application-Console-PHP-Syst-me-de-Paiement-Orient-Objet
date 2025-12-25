<?php
 include ".\src\Database\DatabaseConnection.php";
class Virement extends Payment
{
    private string $rib;
    private string $bankName;
    public function __construct(
        int $id,
        float $amount,
        string $rib,
        string $bankName
    ) {
        parent::__construct($id, $amount);
        $this->rib = $rib;
        $this->bankName = $bankName;
    }
    public function process(): void
    {
        if (!empty($this->rib)) {
            $this->markAsPaid();
        }
    }
}
