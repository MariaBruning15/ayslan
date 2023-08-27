<!DOCTYPE html>
<html lang="en">

<head>

    <title>Validar Login</title>
</head>

<body>

    <?php
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    $host = "localhost"; 
    $database = "database"; 
    $usuario = "root"; 
    $senha = ""; 
    $con = new mysqli($host, $usuario, $senha, $database);

     if($con->connect_error) {
    ?>
        <h1>Erro</h1>
        <a href="login.php">Tentar novamente</a>
    <?php
    }
    $sql = "SELECT email, senha FROM cadastros";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            if ($email == $linha['email']  && $senha == $linha['senha']) {
                header('Location: index.php');
                exit;
            } else if ($email != $linha['email'] && $senha != $linha['senha']) {
        ?>

        <h1>Login errado</h1>
        <a href="login.php">Tentar novamente</a>

    <?php
            }
        }
    }

    ?>
   

</body>

</html>