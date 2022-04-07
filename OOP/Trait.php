<?php

trait Logger 
{
    public function log($msg)
    {
        echo "<pre>";
        echo date('Y-m-d h:i:s') . ":" . "(".__CLASS__.")".$msg;
        echo "</pre>";
    }
}

trait Edit
{
    use Logger;
}

trait Destroy 
{
    public function log()
    {
        echo "deleted";
    }
}

class Book
{
    // use Logger;
    // use Edit;
    // use Destroy;
    // ir t.t.

    use Logger, Edit, Destroy{
        Destroy::log as destroyLog; //laikinas pvadinimas trait metodui
        Logger::log insteadof Destroy; // nurodome kuri metoda naudoti
    } //ir t.t.

    //{}

    private $name;
    private $price;

    public function __construct($knygosPavadinimas, $knygosKaina)
    {
        $this->name = $knygosPavadinimas;
        $this->price = $knygosKaina;

        $this->log("New book was created");
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

?>