<?php
$caminho = $_SERVER['REQUEST_URI'];
$rotas = require __DIR__.'/../src/Config/Rotas.php';

session_start();

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit;
}

$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora;
$controlador->Processa();