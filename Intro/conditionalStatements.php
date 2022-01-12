<?php 

if (1<0) {
    echo "kodas veikia";
} elseif (1==5) {
    echo "salyga buvo false";
} else {
    echo "si eilute niekda nebus isspausdinta";
}


$color = "red";

switch ($color) {
    case "red":
        echo "STOP";
        break;
    case "yellow":
        echo "WAIT";
        break;
    case "green":
        echo "GO";
        break;
    default:
        echo "Invalid color";

}





?>
