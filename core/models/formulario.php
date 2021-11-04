<?php

namespace core\models;

use core\classes\Database;


class formulario
{
    public static function formulario_gm($email,$checkbox=null)
    {
        $bd= new Database();
        
        if(!empty($checkbox)){
            
            return $email;
        }else{
            return false;
        }
        
    }
}