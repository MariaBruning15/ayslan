<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <title>Validar Login</title>
</head>

<body>

    <?php
    $email = trim($_POST["email"]);
    $senha1 = trim($_POST["senha"]);

    setcookie("email", $email);
    setcookie("senha", $senha1);

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
    $sql = "SELECT * FROM cadastros WHERE email = '" .  $email . "'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            if ($senha1 == $linha['senha']) {
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