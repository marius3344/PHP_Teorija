<?php
// Objektai

//Objektas pvz banko saskaita

// Parametrai - Saskaitos nr, saskatos likutis - PRAMETERS
// Veiksmai - ideti pinigu, isimti pinigus - METHODS


//Klase - Class. Object is an instance of a Class


//Access Modifiers
// public, private, (protected)

//public - metodus ir savybes galime pasiekti ir klaseje ir klases isoreje

//private - metodus ir savybes galime pasiekti tik klases viduje



class BankAccount
{
   public $accountNumber;
   public $balance;
   private $user;

   public function setUser($user){
      if($user !== ""){
         $this->user = $user;
      }
   }

   public function getUser(){
      return $this->user;
   }

   public function deposit($amount){
      if($amount>0){
         $this->balance += $amount;
      }
      return $this;
   }

   public function withdraw($amount){
      if($amount <= $this->balance){
         $this->balance -= $amount;
         return $this;
      }
      return false;
   }
}

$myAccount = new BankAccount;

$myAccount->accountNumber = 12345;
$myAccount->balance = 100;

$myAccount->deposit(50);

//echo $myAccount->balance;
//echo $myAccount->accountNumber;

//$myAccount->user = "Jonas"; neveikia, nes private

$myAccount->setUser("Jonas");
echo $myAccount->getUser();






$yourAccount = new BankAccount;
$yourAccount->accountNumber = 32156;
$yourAccount->balance = 1000;

$yourAccount->deposit(100);
$yourAccount->deposit(100);

$yourAccount->deposit(100)->deposit(100)->withdraw(500);

//var_dump($yourAccount);



?>