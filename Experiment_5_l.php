<?php
class BankAccount {
    private $balance = 0;

    function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $amount <br>";
    }

    function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount <br>";
        } else {
            echo "Insufficient balance <br>";
        }
    }

    function showBalance() {
        echo "Balance: $this->balance <br>";
    }
}

$acc = new BankAccount();
$acc->deposit(1000);
$acc->withdraw(500);
$acc->showBalance();
?>

