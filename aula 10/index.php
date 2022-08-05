<?php 
    $notasCursoA = [
        10,
        9,
        9.5,
        7
    ];
    $notasCursoB = [
        3,
        7,
        9.5,
        3
    ];
function mediadeNotas(array $notas):float{
    
    return array_sum($notas) / count($notas);
}
echo mediadeNotas($notasCursoA);