<h1>Listar contato</h1>
<table class ="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Açoes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($contatos as $index => $contato){
            $partes = explode(';', $contato);
           echo "<tr>";
              echo "<td>".$partes[0]."</td>";
              echo "<td>".$partes[1]."</td>";
              echo "<td>".$partes[2]."</td>";
              echo "<td>
                        <a href='/excluir?id={$index}' class='btn btn-danger btn-sm'>Excluir</a>

                        <a href='/editar?id={$index}' class='btn btn-primary btn-sm'>Editar</a>
                    </td>";
           echo "</tr>";

        }
        ?>

</table>