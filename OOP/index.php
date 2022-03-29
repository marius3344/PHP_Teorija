<?php
// Objektai

//Objektas pvz banko saskaita

// Parametrai - Saskaitos nr, saskatos likutis - PRAMETERS
// Veiksmai - ideti pinigu, isimti pinigus - METHODS


//Klase - Class. Object is an instance of a Class



class BankAccount
{
   public $accountNumber;
   public $balance;

   public function deposit($amount){
      if($amount>0){
         $this->balance += $amount;
      }
   }

   public function withdraw($amount){
      if($amount <= $this->balance){
         $this->balance -= $amount;
         return true;
      }
      return false;
   }
}

$myAccount = new BankAccount;

$myAccount->accountNumber = 12345;
$myAccount->balance = 100;

$myAccount->deposit(50);

echo $myAccount->balance;
//echo $myAccount->accountNumber;

$yourAccount = new BankAccount;
$yourAccount->accountNumber = 32156;
$yourAccount->balance = 1000;

//var_dump($yourAccount);



?>