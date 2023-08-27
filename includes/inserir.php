
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php

 include_once 'conexao.php';

if($con->connect_error){
    echo "<h1>Ocorreu um erro com o banco de dados, tente novamente</h1>";
    die();
    }
    $nome= $_POST ['nome'];
    $email= $_POST ['email'];
    $senha= $_POST ['senha'];
    $telefone= $_POST ['telefone'];


    $sql = "INSERT INTO cadastros VALUES(null, '$nome', '$email', '$telefone', '$senha')";

    $result = $con->query($sql);
    if($result == false){
    echo "<p>>Não foi possivel realizar o cadastro!</p>";
    echo "<p>" . $con->errno . ":" . $con->error . "</p>";
    die();
    }
  
?>

</body>
</html>
