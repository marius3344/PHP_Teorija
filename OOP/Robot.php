<?php 

class Robot
{
    private $name;
    
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
}

$android = new Android;
echo $android->greet();
$android->setName("Jonas");

$robot = new Robot;
echo $robot->greet();

?>
