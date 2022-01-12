<?php
$title = "2 Pamoka";
$username = "Jonas";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <h1>Title</h1>
    <h1><?php echo $title ?></h1>
    <h3>Hello, <?php echo $username ?></h3>
    <ol>
        <li>Kurti dinaminius puslapius</li>
        <li>CRUD - Create, Read, Update, Delete, duomenu bazėje</li>
        <li>Surinkti formos duomenis</li>
        <li>Šifruoti duomenis<?php ?></li>
        <li>Galime vartotojui pateikti, failus, paveiksliukus ir kt. išsiųsti el. laišką</li>
    </ol>

    <a href="dataTypes.php">Duomenų tipai</a>
    <br>
    <a href="dates.php">Datos</a>
    <br>
    <?php
    echo "Mokomės PHP <br>";
    echo "dar kartą";
    echo "";
    echo "<br>";

    // kitmieji yra case-sensitive!!!

    #komentaras dar vienas

    $name = "Marius"; //komentaras

    echo $name;
    /*
$lastName;
$last_name;
*/

    function name()
    {
        $age = 15;
        //$name = "juozas";
        global $name;
        echo $name;
    }

    name();

    echo $name;
    //echo $age; 
    ?>
</body>

</html>