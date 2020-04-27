<?php

namespace App;

include 'Model.php';

use Model\Table as ModelTable;

class Table
{
    public static function get()
    {
        echo "Model.Table.get() <br />";
    }
}

ModelTable::get();
Table::get();
