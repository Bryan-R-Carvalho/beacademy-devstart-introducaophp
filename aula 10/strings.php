<?php

$nome = "bryan";
$sobrenome = "carvalho";

$nome2= 'jose da silva';

function algumaCoisa(string $nome):string{
    return ucwords($nome);
}

echo "nome:" . ucfirst($nome).PHP_EOL;
echo "sobrenome:" . strtoupper($sobrenome).PHP_EOL;
echo "nome2:" . ucwords($nome2);
