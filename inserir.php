
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php

 include_once './includes/conexao.php';

if($mysqli->connect_error){
    echo "<h1>Ocorreu um erro com o banco de dados, tente novamente</h1>";
    die();
    }
    $nome= trim($_POST['nome']);
    $email= trim($_POST['email']);
    $senha= trim($_POST['senha']);
    $telefone= trim($_POST['telefone']);

    setcookie("nome", $nome);
    setcookie("email", $email);
    setcookie("senha", $senha);
    setcookie("telefone", $telefone);


    $sql = "INSERT INTO cadastros VALUES(null, '$nome', '$email', '$telefone', '$senha')";

    $result = $mysqli->query($sql);
    if ($result == true){
        header('Location: index.php');
    }
    else if($result == false){
    echo "<p>Não foi possivel realizar o cadastro!</p>";
    echo "<p>" . $mysqli->errno . ":" . $mysqli->error . "</p>";
    die();
    }
  
?>

</body>
</html>
