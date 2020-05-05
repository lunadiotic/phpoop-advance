<?php

interface TableInterface
{
    public function save(array $data);
}

class Table implements TableInterface
{
    public function save(array $data)
    {
        return "Save method from table class";
    }
}


echo (new Table)->save([]);
