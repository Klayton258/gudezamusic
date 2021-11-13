<?php

namespace core\models;

use core\classes\Database;

class adminModel
{
    public static function validaradmin($usuario, $senha)
    {
        $parametros = [
            ':usuario' => $usuario
        ];

        $bd = new Database();
        $admin = $bd->select("
        SELECT * FROM administrador WHERE email = :usuario
        ", $parametros);

        if (count($admin) != 1) {
            return false;
        } else {
            $usuario_admin = $admin[0];

            if (!password_verify($senha, $usuario_admin->senha)) {
                return false;
            }
            return $usuario_admin;
        }
    }

    public function apagar()
    {

        $id = filter_input(INPUT_GET, 'apagar', FILTER_SANITIZE_NUMBER_INT);

        $parametros = [
            ':i' => $id
        ];
        $bd = new Database();
        $bd->delete("
        DELETE FROM musicas WHERE id= :i
        ", $parametros);

        // $img = $_FILES['cover']['tmp_name'];
        // $beat = $_FILES['musica']['tmp_name'];
        // $path = '../assets/musicas/';
        // if(move_uploaded_file($img, $path.$cover)):

    }

    public function editar()
    {
        if (isset($_POST['btn_edit'])) {
            $titulo = $_POST['titulo_edit'];
            $artista = filter_input(INPUT_POST, 'artista_edit', FILTER_SANITIZE_STRING);
            $tamanho = filter_input(INPUT_POST, 'tamanho_edit', FILTER_SANITIZE_NUMBER_INT);
            $id = filter_input(INPUT_POST, 'id_edit', FILTER_SANITIZE_NUMBER_INT);

            $parametros = [
                ':i' => $id,
                ':t' => $titulo,
                ':a' => $artista,
                ':ta' => $tamanho
            ];
            $bd = new Database();
            $bd->update("
        UPDATE musicas SET titulo= :t, artista= :a, tamanho= :ta WHERE id= :i
        ", $parametros);
        }
    }
    public function upload()
    {


        if (isset($_POST['upload'])) {
            $titulo = $_POST['titulo'];
            $artista = filter_input(INPUT_POST, 'artista', FILTER_SANITIZE_STRING);
            $tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_NUMBER_INT);

            $cover = uniqid() . $_FILES['cover']['name'];
            $musica = $_FILES['musica']['name'];

            $parametro = [
                ':t' => $titulo,
                ':a' => $artista,
                ':ta' => $tamanho,
                ':c' => $cover,
                ':m' => $musica
            ];
            $db = new Database();
            $db->insert("
        INSERT INTO musicas (cover,titulo,artista,tamanho,venda,arquivo) 
        VALUES(:c,:t,:a,:ta,0,:m)
        ", $parametro);

            $img = $_FILES['cover']['tmp_name'];
            $beat = $_FILES['musica']['tmp_name'];
            $path = '../assets/musicas/';

            if (move_uploaded_file($img, $path . $cover)) :
                header('Location', 'inicio');
            else :
                echo 'erro1';
            endif;

            if (move_uploaded_file($beat, $path . $musica)) :
                header('Location', 'inicio');
            else :
                echo '<hr>';
                echo 'erro2';
            endif;
        }
    }
    public function slide()
    {

        if (isset($_POST['id'])) {
            $titulo = $_POST['titulo'];
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

            $cover = uniqid() . $_FILES['cover']['name'];
            echo $descricao . "-" . $titulo . "-" . $id;
            echo '<pre>';
            print_r($cover);

            $parametro = [
                ':t' => $titulo,
                ':d' => $descricao,
                ':i' => $id,
                ':c' => $cover
            ];
            $db = new Database();
            $db->update("
                UPDATE slide_novidades SET imagem = :c, titulo = :t, descricao = :d
                WHERE id=:i
                ", $parametro);
            $img = $_FILES['cover']['tmp_name'];
            $path = '../assets/imgs/slides/';

            if (move_uploaded_file($img, $path . $cover)) :
                header('Location', 'inicio');
            else :
                echo 'Erro ao mover';
            endif;
        }
    }
    public function selectslide($id)
    {
        $parametro = [
            ':id' => $id
        ];

        $db = new Database();
        $result = $db->selectfetch("
            SELECT * FROM slide_novidades WHERE id= :id
            ", $parametro);

        return $result;
    }
}