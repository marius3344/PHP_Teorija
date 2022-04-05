<?php 

class Robot
{
    private $name = "Testas";
    
    public function greet(){  //public final function - neleidzia override
        return "Hello!";
    }
}

class Android extends Robot
{
    public function greet(){
        //return "Laba diena";
        $oldGreeting = parent::greet();
        return $oldGreeting."is now Laba diena";
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$android = new Android;
echo $android->greet();
$android->setName("Jonas");
echo $android->getName();


$robot = new Robot;
echo $robot->greet();

?>
