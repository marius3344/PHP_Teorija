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

    public function __toString() // turi grazinti string
    {
        return "Vardas: $this->name. Ūgis: $this->height. Svoris: $this->weight";
    }

}

$student = new Student("Petras", 189, 89);
//$student->view();

//echo $student;

$studentStr = serialize($student);

//var_dump($studentStr); // byte-stream representation

$newStudent = unserialize($studentStr);

var_dump($newStudent);


?>