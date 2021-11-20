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
    //=============================================================
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
    //=============================================================
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
    //=============================================================
    public function upload()
    {


        if (isset($_POST['upload'])) {
            $titulo = trim($_POST['titulo']);
            $artista = trim(filter_input(INPUT_POST, 'artista', FILTER_SANITIZE_STRING));
            $tamanho = trim(filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_NUMBER_FLOAT));

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
    //=============================================================
    public function slide()
    {

        if (isset($_POST['titulo'])) {
            $titulo = trim($_POST['titulo']);
            $descricao = trim(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING));

            $cover = uniqid() . $_FILES['cover']['name'];
            $parametro = [
                ':t' => $titulo,
                ':d' => $descricao,
                ':c' => $cover
            ];
            $db = new Database();
            $db->update("
                INSERT INTO slide_novidades (imagem, titulo, descricao) VALUES(:c, :t, :d)
                ", $parametro);
            $img = $_FILES['cover']['tmp_name'];
            $path = '../assets/imgs/slides/';

            if (move_uploaded_file($img, $path . $cover)) :
                header('Location', 'inicio');
                $_SESSION['destaque'] = 'Sucesso ao adicionar destaque';
            else :
                $_SESSION['destaque'] = 'Erro ao adicionar destaque';
            endif;
        }
    }
    //=============================================================
    public function selectslide($id)
    {
        $db = new Database();
        if ($id != null) {
            $parametro = [
                ':id' => $id
            ];

            $result = $db->selectfetch("
                SELECT * FROM slide_novidades WHERE id= :id
                ", $parametro);
        } else {
            $result = $db->select("
                SELECT * FROM slide_novidades ORDER BY id DESC LIMIT 3
                ");
        }
        return $result;
    }
    //=============================================================
    public function upload_video()
    {
        if (isset($_POST['upload_video'])) {
            $titulo = trim($_POST['titulo']);
            $link = trim(filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING));

            $cover = uniqid() . $_FILES['cover']['name'];
            $parametro = [
                ':t' => $titulo,
                ':l' => $link,
                ':c' => $cover
            ];
            $db = new Database();
            $db->update("
            INSERT INTO videos (imagem,titulo,link) 
            VALUES(:c,:t,:l)
            ", $parametro);
            $img = $_FILES['cover']['tmp_name'];
            $path = '../assets/imgs/videos/';

            if (move_uploaded_file($img, $path . $cover)) :
                header('Location', 'inicio');
                $_SESSION['video'] = 'Sucesso ao adicionar video';
            else :
                $_SESSION['video'] = 'Erro ao adicionar video';
            endif;
        }
    }
    //=============================================================
    public function selectvideos()
    {
        $db = new Database();
        $videos = $db->select("
        SELECT * FROM videos
        ");
        return $videos;
    }
    //=============================================================
    public function apagar_video()
    {

        $id = filter_input(INPUT_GET, 'apagar', FILTER_SANITIZE_NUMBER_INT);

        $parametros = [
            ':i' => $id
        ];
        $bd = new Database();
        $bd->delete("
        DELETE FROM videos WHERE id= :i
        ", $parametros);
    }
    //=============================================================
    public function apagar_slide()
    {

        $id = filter_input(INPUT_GET, 'apagar', FILTER_SANITIZE_NUMBER_INT);

        $parametros = [
            ':i' => $id
        ];
        $bd = new Database();
        $bd->delete("
        DELETE FROM videos WHERE id= :i
        ", $parametros);
    }
}