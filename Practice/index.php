<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Sugeneruoti stringa i html su dviem kintamaisiais -->
    <!-- Rezultatas paragrafe "Mano vardas Marius ir aš esu iš miesto Klaipėda"  -->
    <?php
    $name = "Jonas";
    $city = "Klaipeda";
    //turite sugeneruoti visa paragrafa echo .........................
    echo "<p>Mano vardas ".$name." ir aš esu iš miesto ".$city."</p>";
    ?>
    <p>Mano vardas <?php echo $name; ?> ir aš esu iš miesto <?php echo $city; ?></p>
    
    <!-- Panaudoti pavadinima "PHP Practice" kaip kintamaji ir ji ideti i H1 ir i a taga -->
    <?php 
    $title = "PHP Practice";
    ?>

    <h1><?php echo $title; ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut in adipisci laboriosam voluptatum, quae incidunt voluptatem quam, magnam nam possimus ipsam libero sunt sed? Officia esse voluptatum necessitatibus facere! Quia. <a href="#"><?php echo $title; ?></a></p>

    <?php 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }

    $browser = $_SERVER['HTTP_USER_AGENT'];
    ?>

    <h3><?php echo $ipAddress;?></h3>
    <h3><?php echo $browser;?></h3>
    <?php
    echo $abc;
    print_r(error_get_last());
    ?>


    <h1>Elektros sąskaita</h1>
   
    <ul>
        <li>For first 50 units - 3,50 EUR/Unit</li>
        <li>For next 100 units - 4 EUR/Unit</li>
        <li>For next 100 units - 5,20 EUR/Unit</li>
        <li>For units above 250 units - 6,50 EUR/Unit</li>
    </ul>
    <?php 
    $units = 15623;
    $result = calculateBill($units);
    $resultStr = "Total amount of ".$units." - ".$result." EUR";
    
    function calculateBill($units){
        $firstCost = 3.5;
        $secondCost = 4;
        $thirdCost = 5.2;
        $fourthCost = 6.5;

        if ($units<=50){
            $bill = $units * $firstCost;
        } elseif ($units>50 && $units<= 150) {
            $temp = 50 * $firstCost;
            $remainingUnits = $units - 50;
            $bill = $temp + ($remainingUnits * $secondCost);
        } elseif ($units > 150 && $units<=250) {
            $temp = (50*$firstCost)+(100*$secondCost);
            $remainingUnits = $units -150;
            $bill = $temp + ($remainingUnits*$thirdCost);
        } else {
            $temp = (50*$firstCost)+(100*$secondCost)+(100*$thirdCost);
            $remainingUnits = $units - 250;
            $bill = $temp + ($remainingUnits*$fourthCost);
        }

        return number_format((float)$bill, 2, "," , " ");
    }

    ?>

    <p><?php echo $resultStr; ?></p>


    <h3>Balsavimas</h3>
    <?php 
    $name = "Petras";
    $age = 18;
    $result;

    if($age>17){
        $result = $name." gali balsuoti, nes jam yra ".$age;
    } else {
        $result = $name." negali balsuoti, nes jam yra ".$age;
    }

    ?>
    <p><?php echo $result; ?></p>

    <h3>Palindromas</h3>
    <?php 
    $word = "radar";
    $wordReverse = strrev($word);
    $text;

    if($word == $wordReverse) {
        $text = "Zodis ".$word." yra Palindromas";
    } else {
        $text = "Zodis ".$word." nera Palindromas";
    }


    ?>
    <p><?php echo $text;?></p>
    

</body>
</html>