<?php

namespace Paskaita\Database;

class Logger
{
    public function log($message)
    {
        var_dump("Log ".$message." to the Database");
    }
}