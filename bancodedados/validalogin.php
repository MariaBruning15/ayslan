<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <title>Validar Login</title>
</head>

<body>

    <?php
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    include_once("./includes/conexao.php");
    if ($con->connect_error) {
    ?>
        <h1>Erro</h1>
        <a href="login.php">Tentar novamente</a>
    <?php
    }
    $sql = "SELECT nome, email FROM cadastros";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            if ($email == $linha['email']  && $senha == $linha['senha']) {
                header("index.php");
            } else if ($email != $linha['nome'] && $senha != $linha['senha']) {
        ?>

        <h1>Login errado</h1>
        <a href="login.php">Tentar novamente</a>

    <?php
            }
        }
    }

    ?>
    <?php include_once 'includes/scripts.php' ?>

</body>

</html>