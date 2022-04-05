<?php

class Furniture
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}


class OfficeFurniture extends Furniture
{
    protected $color;

    public function __construct($name, $price, $color)
    {
        parent::__construct($name, $price);
        $this->color = $color;
        self::log();
    }

    protected static function log(){
        echo "Sukurtas naujas ofiso baldas";
    }

}

$furniture = new OfficeFurniture("Stalas", 23.99,"Raudonas");

//OfficeFurniture::log();

?>