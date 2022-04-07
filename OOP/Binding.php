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


// __call()	is triggered when invoking an inaccessible instance method
// __callStatic()	is triggered when invoking an inaccessible static method
// __get()	is invoked when reading the value from a non-existing or inaccessible property
//  __set()	is invoked when writing a value to a non-existing or inaccessible property
//  __isset()	is triggered by calling isset() or empty() on a non-existing or inaccessible property
// __unset()	is invoked when unset() is used on a non-existing or inaccessible property.
// __sleep()	The __sleep() commits the pending data
// __wakeup()	is invoked when the unserialize() runs to reconstruct any resource that an object may have.
// __serialize()	The serialize() calls __serialize(), if available, and construct and return an associative array of key/value pairs that represent the serialized form of the object.
// __unserialize()	The unserialize() calls __unserialize(), if avaialble, and restore the properties of the object from the array returned by the __unserialize() method.
// __toString()	is invoked when an object of a class is treated as a string.
// __invoke()	is invoked when an object is called as a function
// __set_state()	is called for a class exported by var_export()
// __clone()	is called once the cloning is complete
// __debugInfo()	is called by var_dump() when dumping an object to get the properties that should be shown.