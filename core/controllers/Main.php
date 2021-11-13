<?php

namespace core\controllers;

use core\classes\Store;
use core\models\adminModel;
use core\models\formulario;
use core\models\listamusicas;
use core\models\pagamentos;

class Main
{

    public function index()
    {
        $admodel = new adminModel();
        $slide1 = $admodel->selectslide(1);
        $slide2 = $admodel->selectslide(2);
        $slide3 = $admodel->selectslide(3);
        Store::Layout(
            [
                'layout/html-header',
                'inicial',
                'footer',
                'layout/html-footer'
            ],
            [
                'slide1' => $slide1,
                'slide2' => $slide2,
                'slide3' => $slide3
            ]
        );
    }

    // ============================================================================

    public function artistas()
    {
        Store::Layout([
            'layout/html-header',
            'navbar',
            'artistas',
            'footer',
            'layout/html-footer'
        ]);
    }
    public function artista()
    {
        Store::Layout([
            'layout/html-header',
            'navbar',
            'artista',
            'footer',
            'layout/html-footer'
        ]);
    }
    // ============================================================================

    public function musicas()
    {
        $listamusicas = new listamusicas();
        $musicas = $listamusicas->buscar_musicas();
        $albums = $listamusicas->buscar_album();

        Store::Layout([
            'layout/html-header',
            'navbar',
            'musicas',
            'footer',
            'layout/html-footer'
        ], [
            'musicas' => $musicas,
            'albums' => $albums
        ]);
    }
    public function musicas_conteudo()
    {
        Store::Layout([
            'conteudo-musicas',
        ]);
    }
    // ============================================================================

    public function videos()
    {
        Store::Layout([
            'layout/html-header',
            'navbar',
            'videos',
            'footer',
            'layout/html-footer'
        ]);
    }

    // ============================================================================

    public function loja()
    {
        // $pag = new pagamentos();
        // $pag->comprar();

        Store::Layout([
            'layout/html-header',
            'navbar',
            'loja',
            'footer',
            'layout/html-footer'
        ]);
    }
    // ============================================================================

    public function descricao()
    {
        $valor = filter_input(INPUT_GET, "v");
        $numero = filter_input(INPUT_GET, "c");
        if (isset($_GET['v'])) {
            $pag = new pagamentos();
            $pag->comprar($valor, $numero);
        }
        Store::Layout([
            'layout/html-header',
            'navbar',
            'descricao',
            'footer',
            'layout/html-footer'
        ]);
    }

    // ============================================================================

    public function eventos()
    {
        Store::Layout([
            'layout/html-header',
            'navbar',
            'eventos',
            'footer',
            'layout/html-footer'
        ]);
    }

    // ============================================================================

    public function sobrenos()
    {
        Store::Layout([
            'layout/html-header',
            'navbar',
            'sobrenos',
            'footer',
            'layout/html-footer'
        ]);
    }

    // ============================================================================

    public function download()
    {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $buscar = new listamusicas();
        $resultado = $buscar->buscar_por_id($id);

        Store::Layout([
            'layout/html-header',
            'navbar',
            'download-page',
            'footer',
            'layout/html-footer'
        ], ['resultados' => $resultado]);
    }
    public function download_album()
    {
        $id_albumm = filter_input(INPUT_GET, "id_album", FILTER_SANITIZE_NUMBER_INT);
        $buscar = new listamusicas();
        $resultado = $buscar->buscar_por_id_album($id_albumm);

        Store::Layout([
            'layout/html-header',
            'navbar',
            'download-page-album',
            'footer',
            'layout/html-footer'
        ], ['resultados' => $resultado]);
    }
    public function download_this_album()
    {
        $song = new listamusicas();

        $song->baixaralbum();
    }
    public function download_this_song()
    {
        $song = new listamusicas();
        $song->baixarsom();
    }
    // ============================================================================

    public function fm_gm()
    {


        $email = $_POST['email_cliente'];
        if (!isset($_POST['checkbox_gm'])) {
            $checkbox = null;
        } else {
            $checkbox = $_POST['checkbox_gm'];
        }
        $formulario = new formulario();
        $fm = $formulario->formulario_gm($email, $checkbox);

        if (is_bool($fm)) {
            $this->index();
            return;
        } else {
            Store::Layout([
                'layout/html-header',
                'formulario',
                'layout/html-footer'
            ]);
        }
    }

    public function homemmau()
    {
        Store::Layout([
            'temp/homem-mau'
        ]);
    }
    public function novos_desafios()
    {
        Store::Layout([
            'temp/novos-desafios'
        ]);
    }
    public function encantador()
    {
        Store::Layout([
            'temp/encantador'
        ]);
    }
    public function sentimentos()
    {
        Store::Layout([
            'temp/sentimentos'
        ]);
    }
    public function quemama()
    {
        Store::Layout([
            'temp/quemama'
        ]);
    }
}