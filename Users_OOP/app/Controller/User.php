<?php

class User
{
    //DB info
    private $conn;
    private $table = "users";

    //objekto savybes
    public $id;
    public $name;
    public $email;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        $sql = "INSERT INTO ".$this->table." SET name=:name, email=:email";
        $query = $this->conn->prepare($sql);

        //bind values
        $query->bindParam(":name", $this->name);
        $query->bindParam(":email", $this->email);

        if($query->execute()){
            return true;
        } else {
            return false;
        }

    }


}