<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Duomenų tipai</h1>
    
    <ol>
        <li>String <?php $string = "tekstas"; ?></li>
        <li>Integer <?php $integer = 10; //Sveikasis skaicius?></li>
        <li>Float <?php $float = 3.14159; ?></li>
        <li>Boolean <?php $booolean = true; // arba false ?></li>
        <li>NULL <?php $null = NULL;?></li>
        <li>Masyvas <?php $array = [];?></li>
        <li>Objektas pasimokysim ateityje </li>

    </ol>

    <?php
    ///////////////////////String funkcijos////////////////////////////
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima totam tempore molestiae explicabo obcaecati! Voluptatum molestiae, repellat ipsa quo recusandae ex voluptate! Magnam ea sint deleniti fuga, inventore fugiat!";

    // String length
    echo "Sakinio ilgis yra ".strlen($text)." ";

    // Word count

    echo "Žodžių yra ".str_word_count($text)." ";

    // Reverse string

    echo strrev($text)." ";

    // Word search

    echo strpos($text, "Magnam");
    echo strpos($text, "Langas");
    var_dump(strpos($text, "Langas"));
    echo "<br>";

    // Replacing word

    echo str_replace("Lorem", "Labas", $text)."<br>";
    echo $text;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //String to Integer, Float to Integer

    $price = 1.99;
    $priceInt = (int)$price;
    echo $priceInt;

    echo "<br>";

    $height = "178.96";
    $heightInt = (int)$height;
    echo $heightInt;

    echo "<br>";

    $heightFloat = floatval($height);
    echo $heightFloat;

    // Matematika/////////////////
    echo "<br>";
    echo pi();
    echo "<br>";
    echo "maziausias skaicius yra ".min(12, 89, 456, 1, 56, 899)."<br>";
    echo "didziausias skaicius yra ".max(12, 89, 456, 1, 56, 899)."<br>";

    echo sqrt($price);
    echo "<br>";
    echo abs(-99);

    echo "<br>";
    echo(round($price));
    echo "<br>";
    echo (rand(0, 10)/getrandmax());


    //Constants
    define("_ROOT_FOLDER", "/scripts");

    $path = _ROOT_FOLDER."/create";


    ///Operators
    ///Aritmetiniai operatoriai

    // + Sudetis / Addition
    // - Atimtis / Substraction
    // * Daugyba / Multiplication
    // / Dalyba / Division
    // % Liekana / Modulus
    // ** Kelimas laipsniu / Exponentaition

    //priskyrimo operatorius

    // = priskiriame reiksme
    // += / a+=b ty a = a+b
    // -= /a-=b ty a= a-b
    // *= / a*=b ty a = a*b
    // /= / a/=b ty a = a/b
    // %= / a%=b ty a = a%b


    // Palyginimo operatoriai
    // == lygus (equal)
    // === identiski (identical), atitinka ir reiksme ir tipas
    // != nelygu
    // <> nelygu
    // !== nera identiski
    // > daugiau
    // < maziau
    // >= daugiau arba lygu. NE TAS PATS kaip =>
    // <= maziau arba lygu
    // <=> Spaceship

    $a = 5;
    $b = 99;
    echo ($a <=> $b); // gražins -1

    $c = 15;
    $d = 15;
    echo ($c <=> $d); //grazins 0

    $e = 3;
    $f = 1;
    echo ($e <=> $f); // grazins 1

    var_dump($e <=> $f);

    //padininimo - sumazinimo +-1
    echo "<br>";
    echo $a++; //post increment
    echo $a; 
    echo "<br>";
    echo ++$a; // pre  increment
    echo $a++; 

    $b--;
    --$b;

    // Loginiai 

    // and - && abi salygos yra true
    // or - || viena is salygu yra true
    // xor viena is salygu yra true, bet ne abi
    // ! - not(nera) !true == false

    //String 

    // . sudeda du stringus
    // .= sujungia du stringus
    // $tekstas1 .= $tekstas2;



    ?>

    <h3><a href="conditionalStatements.php">Sąlygos</a></h3>
</body>
</html>