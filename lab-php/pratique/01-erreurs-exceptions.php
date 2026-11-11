<?php
declare(strict_types=1);

class InsufficientFundsException extends RuntimeException
{
}

final class BankAccount
{
    public function __construct(private float $balance)
    {
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Le montant doit être supérieur à zéro.');
        }

        if ($amount > $this->balance) {
            throw new InsufficientFundsException('Le solde est insuffisant pour ce retrait.');
        }

        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new BankAccount(100.00);

try {
    $account->withdraw(150.00);
    echo "Retrait effectué.\n";
} catch (InsufficientFundsException $exception) {
    echo 'Retrait refusé : ' . $exception->getMessage() . "\n";
} catch (InvalidArgumentException $exception) {
    echo 'Montant invalide : ' . $exception->getMessage() . "\n";
} finally {
    echo 'Solde actuel : ' . number_format($account->getBalance(), 2, '.', '') . "\n";
}