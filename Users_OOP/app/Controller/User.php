<?php

class User
{
    //DB info
    private static $conn;
    private static $table = "users";

    //objekto savybes
    public $id;
    public $name;
    public $email;

    public function __construct($db)
    {
        self::$conn = $db;
    }

    public function create()
    {
        $sql = "INSERT INTO ".self::$table." SET name=:name, email=:email";
        $query = self::$conn->prepare($sql);

        //bind values
        $query->bindParam(":name", $this->name);
        $query->bindParam(":email", $this->email);

        if($query->execute()){
            return true;
        } else {
            return false;
        }

    }

    public static function index($db){
        //prisidedame prijungima prie DB
        self::$conn = $db;

        //duomenu istraukimas
        $sql = "SELECT * FROM ".self::$table;
        $query = self::$conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        //graziname duomenu masyva
        return $result;
    }

    public function update()
    {
        $sql = "UPDATE ".self::$table." SET
                name = :name,
                email = :email
                WHERE id = :id";
        
        $query = self::$conn->prepare($sql);

        $query->bindParam(':name', $this->name);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':id', $this->id);

        if($query->execute()){
            return true;
        } else {
            return false;
        }


    }

    public function getOne()
    {
        //gauname vieno iraso duomenis pagal id
        $sql = "SELECT * FROM ".self::$table." WHERE id = ".$this->id;
        $query = self::$conn->prepare($sql);
        $query->execute();
        $result = $query->fetch();

        //priskiraime duomenis savybems
        $this->name = $result['name'];
        $this->email = $result['email'];

    }


    public function delete()
    {
        $sql = "DELETE FROM " . self::$table . " WHERE id = ".$this->id;

        $query = self::$conn->prepare($sql);
        
        if($query->execute()){
            return true;
        } else {
            return false;
        }
    }


}