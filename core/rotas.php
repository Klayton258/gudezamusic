<?php

$rotas = [
    'inicio' => 'main@index',

    'videos' => 'main@videos',
    'eventos' => 'main@eventos',
    'sobrenos' => 'main@sobrenos',
    ///=================================================
    'loja' => 'main@loja',
    'descricao' => 'main@descricao',
    ///=================================================
    'artistas' => 'main@artistas',
    'artista' => 'main@artista',
    ///=================================================
    'fm_gm' => 'main@fm_gm',
    ///=================================================
    'musicas' => 'main@musicas',
    'musicas-conteudo' => 'main@musicas_conteudo',
    'download' => 'main@download',
    'baixarestesom' => 'main@download_this_song',
    'download_album' => 'main@download_album',
    'baixarestealbum' => 'main@download_this_album',
    'comprar' => 'main@comprar',
    ///=================================================
    'detalhes' => 'main@detalhes',

    'homemmau' => 'main@homemmau',
    'novos_desafios' => 'main@novos_desafios',
    'acustica' => 'main@acustica',
    'o_encantador_delas' => 'main@encantador',
    'sentimentos_nao_tem_idade' => 'main@sentimentos',
    'quem_ama_sofre' => 'main@quemama',
];

$acao = 'inicio';

if (isset($_GET['a'])) :
    if (!key_exists($_GET['a'], $rotas)) :
        $acao = 'inicio';
    else :
        $acao = $_GET['a'];
    endif;
endif;

$partes = explode('@', $rotas[$acao]);
$controlador = 'core\\controllers\\' . ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();