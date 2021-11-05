<?php

namespace core\models;

use core\classes\Database;

class listamusicas
{


    public function buscar_musicas()
    {
        $bd = new Database();
        $musicas = $bd->select("
        SELECT * FROM musicas ORDER BY id DESC
        ");
        return $musicas;
    }
    //=============================================================
    public function buscar_album()
    {
        $bd = new Database();
        $albums = $bd->select("
        SELECT * FROM album ORDER BY id DESC
        ");
        return $albums;
    }
    //=============================================================
    public function buscar_por_id($id)
    {
        $parametro = [
            ':id' => $id
        ];

        $bd = new Database();

        $result = $bd->select("SELECT * FROM musicas WHERE id= :id",$parametro);

        return $result;
    }
    //=============================================================
    public function buscar_por_id_album($id_album)
    {
            $parametro = [
                ':id' => $id_album
            ];
    
            $bd = new Database();
    
            $result = $bd->select("SELECT * FROM album WHERE id= :id",$parametro);
    
            return $result;
    }
    //=============================================================
    public function download_music()
    {
        if(!empty($_GET['arquivo']))
        {

            $nome = basename($_GET['arquivo']);
            $caminho = 'assets/musicas/' . $nome;

            if(!empty($nome)&& file_exists($caminho)){
                header("Cache-Control:public");
                header("Content-Description:File Transfer");
                header("Content-Description:attatchment;filename=$nome");
                header("Content-Type:application/zip");
                header("Content-Transfer-Encoding:binary");

                readfile($caminho);
                exit;
            }else
                {
                    echo "Ficheiro nao encontrado";
                }
        
        }
    }
    //=============================================================
    public function baixarsom()
    {
        
        if(!empty($_GET['arquivo']))
        {
            $bd= new Database();

            $id = $_GET['arquivo'];

            $parametro=[
                ':id'=> $id
            ];
            $stat = $bd->selectfetch("
                SELECT * FROM musicas WHERE id = :id
            ",$parametro);
            
            // echo '<pre>';
            // print_r($stat);
            // echo '<br><hr>';
            // echo $stat['arquivo'];
            // die();

                $file = 'assets/musicas/' . $stat['arquivo'];

            if(file_exists($file)){
                header('Content-Description:'.$stat['description']);
                header('Content-Type:'.$stat['type']);
                header('Content-Disposition:'.$stat['disposition'].';filename="'.basename($file).'"');
                header('Expires:'.$stat['expires']);
                header('Cache-Control:'.$stat['cache']);
                header('Pragma:'.$stat['pragma']);
                header('Content-Length:'.filesize($file));
                
                readfile($file);
                exit;
            header("location: download");
        }else
        {
            header("location: download");
            echo "Ficheiro nao encontrado";
        }
            echo "ERRO-------------------------------------";
            die();
        }
    }
        //=============================================================
    public function baixaralbum()
    {
            
            if(!empty($_GET['id_albumm']))
            {
                $bd= new Database();
    
                $id = $_GET['id_albumm'];
    
                $parametro=[
                    ':id'=> $id
                ];
                $stat = $bd->selectfetch("
                    SELECT * FROM album WHERE id = :id
                ",$parametro);
                
                // echo '<pre>';
                // print_r($stat);
                // echo '<br><hr>';
                // echo $stat['arquivo'];
                // die();
    
                    $file = 'assets/musicas/' . $stat['arquivo'];
    
                if(file_exists($file)){
                    header('Content-Description:'.$stat['description']);
                    header('Content-Type:'.$stat['type']);
                    header('Content-Disposition:'.$stat['disposition'].';filename="'.basename($file).'"');
                    header('Expires:'.$stat['expires']);
                    header('Cache-Control:'.$stat['cache']);
                    header('Pragma:'.$stat['pragma']);
                    header('Content-Length:'.filesize($file));
                    
                    readfile($file);
                    exit;
                header("location: download_album");
            }else
            {
                header("location: download_album");
                echo "Ficheiro nao encontrado";
            }
    
            }
    }

}