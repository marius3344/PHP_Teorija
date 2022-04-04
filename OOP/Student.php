<?php 

class Student 
{
    public $name;
    public int $height;
    public int $weight;

    public function __construct($name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function view(){
        echo $this->name. " ".$this->height."cm ".$this->weight."kg";
    }

}

$student = new Student("Petras", 189, 89);
$student->view();



?>