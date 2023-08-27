<!DOCTYPE html>
<html lang="en">

<head>

    <title>Validar Login</title>
</head>

<body>

    <?php

    $host = "localhost";
    $database = "database";
    $usuario = "root";
    $senha = "";
    $con = new mysqli($host, $usuario, $senha, $database);

    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if ($con->connect_error) {
    ?>
        <h1>Erro</h1>
        <a href="login.php">Tentar novamente</a>
    <?php
    }
    $sql = "SELECT * FROM cadastros WHERE email = '" .  $email . "'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($linha = $result->fetch_assoc()){
        if ($senha == $linha['senha']) {
            header('Location: index.php');
        
    } else {
    ?>

        <h1>Login errado</h1>
        <a href="login.php">Tentar novamente</a>


    <?php
        die();
    }
  }
  }

    ?>


</body>

</html>