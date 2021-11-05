<?php

namespace core\models;

use core\classes\Database;

class cliente
{


    public static function buscar_clientes()
    {
        $bd = new Database();
        $clientes = $bd->select("
        SELECT * FROM cliente ORDER BY id DESC
        ");
        return $clientes;
    }
}