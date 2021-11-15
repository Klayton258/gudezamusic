<?php

$rotas = [
    'inicio' => 'admin@admin_index',
    'admin_login' => 'admin@admin_login',
    'admin_submeter_login' => 'admin@admin_submeter_login',
    'admin_logout' => 'admin@admin_logout',
    'upload' => 'admin@upload',
    'slide' => 'admin@slide',
    'upload_video' => 'admin@upload_video',

    //========================================
    'upload_musica' => 'admin@upload_musica',
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