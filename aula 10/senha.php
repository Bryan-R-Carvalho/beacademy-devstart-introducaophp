<?php
$senha = '12345';


echo password_hash($senha, PASSWORD_ARGON2I).PHP_EOL;