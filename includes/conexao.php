<?php 

    $host = "localhost";
    $database = "database";
    $usuario = "root";
    $senha = "";
    $con = new mysqli($host, $usuario, $senha, $database);


    if ($con->connect_error) {
    ?>
        <h1>Erro</h1>
        <a href="login.php">Tentar novamente</a>
        <?php
    }