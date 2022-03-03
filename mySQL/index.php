<!-- <pre> -->
<?php

//MySQLi 
// Object-oriented
// Procedural


//PDO

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "sakila";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected to database";
} catch(PDOException $e) {
    echo "connection failed: ".$e->getMessage();
}
//////Create Query
$firstName = "JOHN";
$lastName = "WILLIS";

$sql1 = "INSERT INTO actor(first_name, last_name) VALUES ('$firstName', '$lastName')";
$query = $conn->prepare($sql1);
$query->execute();

/////Read Query
//$sql = $conn->prepare(
// "SELECT * 
// FROM actor 
// WHERE actor_id=1 OR actor_id=99"
// );
$sql = $conn->prepare("SELECT * FROM actor");
$sql->execute();

//var_dump($sql);

$result = $sql->fetchAll();
//print_r($result);

//echo $result['first_name'];

////Update
$id = 12;
$newName="Vardas";
$sql4 = "UPDATE actor SET first_name=$newName WHERE actor_id=$id";
try{
    $query = $conn->prepare($sql4);
    $query->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}


//////Delete Query
$id = 206;

$sql3 = "DELETE FROM actor WHERE actor_id=$id";
$query = $conn->prepare($sql3);
$query->execute();





?>

<table>
    <tr>
        <th>Name</th>
        <th>Last Name</th>
    </tr>
    
    <?php
    foreach($result as $actor) {
        echo "<tr><td>".$actor['first_name']."</td><td>".$actor['last_name']."</td></tr>";
    }
    ?>
</table>