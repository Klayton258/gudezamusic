<?php
namespace core\models;

use core\classes\Database;

class validarlogin{

public static function validar_login($usuario, $senha){


    $paramertro=[
        ':usuario' => $usuario
    ];
        $bd=  new Database();
   $result = $bd->select(
        "SELECT * FROM administrador",
        $paramertro
    );
  
        $usuario = $result[0];
        if($senha != $usuario->senha){

            return false;
        }else{ 
            return $usuario;
        }
}
}