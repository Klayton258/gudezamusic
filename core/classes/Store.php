<?php

namespace core\classes;

use Exception;

class Store
{

    public static function Layout($estruturas, $dados = null)
    {
        if (!is_array($estruturas)) {
            throw new Exception("Colecao de estruturas invalida");
        }
        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }
        foreach ($estruturas as $estrutura) {
            include("../core/views/$estrutura.php");
        }
    }

    public static function Layout_admin($estruturas, $dados = null)
    {
        if (!is_array($estruturas)) {
            throw new Exception("Colecao de estruturas invalida");
        }
        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }
        foreach ($estruturas as $estrutura) {
            include("../../core/views/admin/$estrutura.php");
        }
    }
    public static function adminlogado()
    {
        return isset($_SESSION['admin']);
    }
    public static function redirect($rota='', $admin=false)
    {
       if(!$admin)
       {
        header('Location:' .BASE_URL. '?a='. $rota);
       }else{
        header('Location:' .BASE_URL. 'admin/?a='. $rota);
       }
    }
    public static function album_ep()
    {
        return isset($_SESSION['album']);
    }
    public static function venda()
    {
        return isset($_SESSION['venda']);
    }
}