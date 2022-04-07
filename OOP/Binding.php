<?php

use Omniphx\Forrest\Providers\Laravel\Facades\Forrest;

class Forest
{
    protected static $name = "Miškas";

    public static function getName()
    {
        //return self::$name;
        return static::$name;
    }
    
}

//echo Forest::getName();

class Tree extends Forest
{
    protected static $name = "Medis";
}

echo Tree::getName();

//static late binding

//self->static