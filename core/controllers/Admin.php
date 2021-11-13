<?php

namespace core\controllers;

use core\classes\Store;
use core\models\adminModel;
use core\models\listamusicas;

class Admin
{
    public function admin_index()
    {
        if (!Store::adminlogado()) {
            Store::redirect('admin_login', true);
            return;
        }
        $buscar = new listamusicas();
        $result = $buscar->buscar_musicas();

        Store::Layout_admin(
            [
                'layout/html-header',
                'inicio',
                'layout/footer',
                'layout/html-footer'
            ],
            ['musicas' => $result]
        );
    }

    //====================================================================================================

    public function admin_login()
    {
        if (Store::adminlogado()) {
            Store::redirect('inicio', true);
            return;
        }
        Store::Layout_admin(
            [
                'layout/html-header',
                'login',
                'layout/footer',
                'layout/html-footer'
            ],
        );
    }

    //====================================================================================================
    public function admin_submeter_login()
    {
        if (Store::adminlogado()) {
            Store::redirect('admin_login', true);
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            Store::redirect('admin_login', true);;
            return;
        }
        if (
            !isset($_POST['text_admin']) || !isset($_POST['text_senha']) ||
            !filter_var(trim($_POST['text_admin']), FILTER_VALIDATE_EMAIL)
        ) {
            $_SESSION['erro'] = 'Verifique se os dados estao corretos';
            Store::redirect('admin_login', true);
            return;
        }
        $usuario = trim(strtolower($_POST['text_admin']));
        $senha = trim($_POST['text_senha']);

        $admin = new adminModel();
        $result = $admin->validaradmin($usuario, $senha);

        if (is_bool($result)) {
            $_SESSION['erro'] = 'Login invalido!';
            Store::redirect('admin_login', true);
            return;
        }

        $_SESSION['nome_admin'] = $result->nome;
        $_SESSION['email_admin'] = $result->email;
        $_SESSION['admin'] = $result->id_admin;

        Store::redirect('inicio', true);
        return;
    }
    //====================================================================================================
    public function admin_logout()
    {
        unset($_SESSION['nome_admin']);
        unset($_SESSION['email_admin']);
        unset($_SESSION['admin']);

        Store::redirect('admin_login', true);
        return;
    }
    //====================================================================================================
    public function upload_musica()
    {

        $lst = new adminModel();
        $lst->apagar();

        $_SESSION['apagada'] = 'Apagado com sucesso';
        Store::redirect('inicio', true);
        return;
    }
    public function upload()
    {
        $lst = new adminModel();
        $lst->upload();

        $_SESSION['editada'] = 'Atualizada com sucesso';
        Store::redirect('inicio', true);
        return;
    }
    //====================================================================================================
    public function slide()
    {
        $lst = new adminModel();
        $lst->slide();
    }
    //====================================================================================================
}