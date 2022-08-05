<?php
    declare(strict_types=1);
    
    function pagarConta($fatura, $dinheiro){
        return $fatura - $dinheiro;
    }
    function welcome(string $nome){
       echo "Bem vindo {$nome}".PHP_EOL;
    }
    welcome("João");
    echo "valor".pagarConta(100, 50).PHP_EOL;
?>