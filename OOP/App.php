<?php 

class App
{
    private static $app = null;

    private function __construct()
    {

    }

    public static function get() : App
    {
        if(!self::$app){
            self::$app = new App();
        }

        return self::$app;
    }

    public function debug(){
        echo "App started";
    }
}

$app = App::get();
$app->debug();

?>