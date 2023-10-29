<?php 

$host = "localhost";
$database = "database";
$usuario = "root";
$senha = "";
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error) {
    ?>
    <h1>Erro</h1>
    <a href="login.php">Tentar novamente</a>
    <?php
}
