<form action = "" method>
    <input type="text" name="nome" placeholder="Nome">
    <button>Enviar</button>
</form>

<?php
    if ($_POST) {
        echo $_POST['nome'];
    }
?>