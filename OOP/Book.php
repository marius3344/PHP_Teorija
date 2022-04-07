<?php
//declare(strict_types=1);
class Book
{
    

    private $name;
    private $price;

    public function __construct($knygosPavadinimas, $knygosKaina)
    {
        $this->name = $knygosPavadinimas;
        $this->price = $knygosKaina;

     
    }

 


    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function __destruct(){
        //echo $this->name;
    }

}
$firstBook  = new Book("Harry Potter", 8.99);

//echo $firstBook->getPrice();



   //nuo php 8.0 constructor promotion


class Book2
{
//    private $name;
//    private $price;

//    public function __construct($knygosPavadinimas, $knygosKaina)
//    {
//        $this->name = $knygosPavadinimas;
//        $this->price = $knygosKaina;
//    }

    function __construct(private $name, private $price)
    {
        
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

}

//$secondBook = new Book2("Ziedu valdovas", 5.99);
//echo $secondBook->getName();

//typed properities
class Book3 
{
    public string $name;
    public float $price;

    public function __construct($name, $price){
        $this->price = $price;
        $this->name = $name;
    }
    
}

$thirdBook = new Book3("789", 9.99);
//$thirdBook->price = 8.99;
//var_dump($thirdBook->price);
////var_dump($thirdBook->name);


//////////INHERITANCE/////////////

class ChildrensBook extends Book
{
    private $recommendedAge;

    public function __construct($name, $price, $age){
        
        parent::__construct($name, $price);
        $this->recommendedAge = $age;
    }

    // public function setRecAge($age){
    //     $this->recommendedAge = $age;
    //     return $this;
    // }

    public function getRecAge(){
        return $this->recommendedAge;
    }
}

$childrensBook = new ChildrensBook("Pepe Ilgakojine", 23.69, 8);

//echo $childrensBook->getName();

//$childrensBook->setRecAge(7);
//echo $childrensBook->getRecAge().' '.$childrensBook->getName().' '.$childrensBook->getPrice();


?>