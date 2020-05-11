<?php

abstract class Database
{
    abstract public function connection();
    public function disconect()
    {
        // 
    }
}

class Model extends Database
{
    // Must implemented cause method signature
    public function connection()
    {
        // 
    }
}

// $db = new Database();
$model = new Model();
