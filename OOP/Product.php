<?php 

class Product {
    public $name;
    public $description;
    private $price;

    public function setPrice($price){
        $this->price = $price;
        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function discount(){
        $this->price = $this->price*0.7;
        return $this;
    }

    public function sellPrice($customer){
        if ($customer == "P"){
            return $this->price*1.21;
        } else {
            return $this->price;
        }
    }

  
}

$phone = new Product;
$phone->name = "Iphone 12";
$phone->description = "Mobile phone";
$phone->setPrice(150);
echo $phone->getPrice();

echo $phone->discount()->sellPrice("P");
echo $phone->discount()->getPrice();




?>
