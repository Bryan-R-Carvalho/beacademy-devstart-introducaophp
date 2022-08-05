<?php
    $arquivo = fopen('produtos.csv', 'a+');
    fwrite($arquivo, 'Bryan'.PHP_EOL);
    fwrite($arquivo, 'joao');

    fclose($arquivo);