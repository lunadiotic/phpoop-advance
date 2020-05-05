<?php

interface TableInterface
{
    public function save(array $data);
}

interface LogInterface
{
    public function log(string $message);
}

class Table implements TableInterface, LogInterface
{
    public function save(array $data)
    {
        return "Save method from table class";
    }

    public function log(string $message)
    {
        return $message . "\n";
    }
}


echo (new Table)->log('Interface sample from Table class.');
echo (new Table)->save([]);
