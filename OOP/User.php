<?php

// class User{
//    public $first_name;
//    public $last_name;
   
//    public function welcome(){
//        echo "Hello, ".$this->first_name." ".$this->last_name;
//    }
   

// }

// $newUser = new User;
// $newUser->first_name = "Jonas";
// $newUser->last_name = "Jonauskas";

// $newUser->welcome();

class User{
    private $first_name;
    private $last_name;
    
    public function setFirstName($vardas){
        $this->first_name = $vardas;
        return $this;
    }

    public function setLastName($pavarde){
        $this->last_name = $pavarde;
        return $this;
    }

    //toliau butu get metodai

    // public function getFirstName(){
    //     return $this->first_name;
    // }

    public function welcome(){
        echo "Hello, ".$this->first_name." ".$this->last_name;
        return $this;
    }
    
 
 }
 
 $newUser = new User;
//  $newUser->setFirstName("Jonas");
//  $newUser->setLastName("Jonauskas");
//  $newUser->welcome();
$newUser->setFirstName("Antanas")->setLastName("Antanauskas")->welcome();

$newUser->welcome();


?>