<?php
    $a1 = [
        'nome' => 'Bryan',
        'email' => 'email@gmail',
        'telefone' => '41231245',
        'notas' => [
            9,
            3,
            5
        ]
    ];
    $a2 = [
        'nome' => 'joao',
        'email' => 'joao@gmail',
        'telefone' => '1111111111',
        'notas' => [
            4,
            5,
            2,
            7
        ]
    ];
        $alunos = [
            $a1,
            $a2
        ]
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class= "container">
    <h1 class="mt-5> Alunos </h1>
    <table class="table table-bordered table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($alunos as $cadaAluno){
                    echo '<tr>';
                        echo '<td>' . $cadaAluno ['nome'] . '</td>';
                        echo '<td>' . $cadaAluno ['email'] . '</td>';
                        echo '<td>' . $cadaAluno ['telefone'] . '</td>';
                    echo '</tr>';
                }
            ?>
    </table>
</div>