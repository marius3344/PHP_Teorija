<?php 
//public - prieinamas visur ir visiems
//private - prienamas tik toje klaseje
//protected - pasiekiama klaseje ir is jos praplestose klasese
require ("Trait.php");


class Customer
{
    use Logger;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->log("New record");
    }

    protected function format()
    {
        return ucwords($this->name);
    }

    public function getName()
    {
        return $this->format();
    }

}

$customer =new Customer("maxima");
echo $customer->getName();
//var_dump($customer);

class Vip extends Customer
{
    public function getFormattedName()
    {
        return $this->format();
    }
}

$vipCustomer = new Vip("rimi");

echo $vipCustomer->getFormattedName();

?>