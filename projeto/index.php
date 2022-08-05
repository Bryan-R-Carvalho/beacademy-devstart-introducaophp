<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

echo match($url[0]){
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastrar(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => pagina404(),
};

include 'telas/footer.php';
?>