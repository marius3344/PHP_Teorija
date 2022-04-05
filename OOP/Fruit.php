<?php 
//Static methods and properties - kai galime pasiekti be objekto
// Instance methods and properties- kai pasiekiame is objekto

class Fruit
{
    public static function definition()
    {
        echo "Fruits are great!";
    }

    //self::definition();

}

//echo Fruit::definition();

class HttpRequest
{
    public static function uri(): string
    {
        return strtolower($_SERVER['REQUEST_URI']);
    }
}

echo HttpRequest::uri();

?>
