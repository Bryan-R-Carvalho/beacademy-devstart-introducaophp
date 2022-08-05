<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

echo match($url){
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => pagina404(),
};

include 'telas/footer.php';
?>