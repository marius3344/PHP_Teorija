<?php 
// TASK1 List of Colors
$colors = [
    "red",
    "green",
    "blue",
];

// TASK2 Facts about Countries
$countries = [
    "Lithuania" => "Vilnius",
    "Italy" => "Rome",
    "Sweden" => "Stockholm",
    "Latvia" => "Riga",
    "Poland" => "Warsaw",
    "Germany" => "Berlin",
];

// TASK3 Average Temperature and five lowest, five highest temperatures.
$monthTemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$tempArray = explode(", ", $monthTemp);
//var_dump($tempArray);
$tempArrayLength = count($tempArray);
//var_dump($tempArrayLength);
$totalTemp = 0;
foreach ($tempArray as $temp){
    $totalTemp += $temp;
    //$totalTemp += (int)$temp;
}
//var_dump($totalTemp);
$avgTemp = $totalTemp/$tempArrayLength;
//var_dump($avgTemp);

sort($tempArray);
//var_dump($tempArray);

//Sukurkite asocijuota masyva su 5 asmenimis ir ju amziumi. Ispausdinkite kiekvieno asmens varda ir jo amziu i html.
//Suraskite jauniausia ir seniausia asmeni
//Suraskite amziaus vidurki
//Padarykite lentele, kur butu Vardas, Amzius ir Gimimo metai. Metai turi buti suskaiciuoti!!!

$people = [
    "Jonas"=>26,
    "Marytė"=>18,
    "Petras"=>36,
    "Janina"=>58,
    "Antanas"=>22,
    
];

//asort($people);
//var_dump($people);

$avgAge = array_sum($people)/count($people);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Task 1 Color list</h3>
    <ul>
        <?php 
        foreach ($colors as $color) {
            echo "<li>$color</li>";
        }
        ?>
    </ul>
    <h3>Task 2 Capitals of Countries</h3>
    <?php
    foreach ($countries as $country => $capital){
        echo "<p> The capital of $country is $capital.</p>";
    }
    ?>
    <h3>Task 3 Average Temperatures</h3>
    <?php echo "<p>Average temparture is $avgTemp</p>";
    echo "<p>Five lowest temperatures are: ";
    for ($i=0; $i<5; $i++){
        echo $tempArray[$i];
        if ($i==4){
            echo ".</p>";
        } else {
            echo ", ";
        }
    }

    echo "<p>Five highest temperatures are: ";
    for ($i=($tempArrayLength-5); $i<$tempArrayLength; $i++){
        echo $tempArray[$i];
        if ($i==$tempArrayLength-1){
            echo ".</p>";
        } else {
            echo ", ";
        }
    };


    
    ?>
    <h3>Task 4</h3>
    <ol>
        <?php 
        foreach($people as $name=>$age){
            echo "<li>$name, $age metai";
        }
        ?>
    </ol>
    <?php 
    //echo "<p>Jauniausias asmuo yra ".array_key_first($people).", ".reset($people);
    //echo "<p>Vyriausias asmuo yra ".array_key_last($people).", ".end($people);
    echo "<p>Vyriausias asmuo yra ".array_search(max($people), $people).", ".max($people)."</p>";
    echo "<p>Jauniausias asmuo yra ".array_search(min($people), $people).", ".min($people)."</p>";
    echo "<p>Vidutinis amžius yra $avgAge</p>";
    ?>

    <table>
        <tr>
            <th>Vardas</th>
            <th>Amžius</th>
            <th>Gimimo metai</th>
        </tr>
        <?php foreach ($people as $name=>$age){
            $birthYear = date("Y")-$age;
            echo "<tr><td>$name</td><td>$age</td><td>$birthYear</td></tr>";
        } 
        
        ?>
    </table>
</body>
</html>