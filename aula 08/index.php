<?php

$url = $_SERVER['REQUEST_URI'];



echo match($url){
    '/' => '<h1>Home</h1>',
    '/login' => '<h1>Login</h1>',
    default => '<h1>ERROR 404 PAGINA NAO ENCONTRADA</h1>'
};
?>