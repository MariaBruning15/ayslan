<?php
setcookie("nome");
setcookie("email");
setcookie("senha");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'includes/metadados.php' ?>
    <title>Cadastro</title>
</head>

<body>

    <h1 class="título">Cadastro</h1>
    <p class="p">Já possui uma conta?</p>
    <p class="p">Realizar <a href="login.php" class="link">login</a></p>

    <div class="flex-container">
        <form action="./includes/inserir.php" method="POST">
            <div class="flex-item">

                <input type="text" name="nome" placeholder="nome de usuário" class="texto"><br>
                <input type="text" name="email" placeholder="email" class="texto"><br>
                <input type="password" name="senha" placeholder="senha" class="texto"><br>
                <input type="text" name="telefone" placeholder="telefone" class="texto"><br>
                <input type="date" name="data" id="" class="texto"> <br> <br>



            </div>

            <div class="flex-item">
                <label for="">Gênero:</label> <br> <br>
                <label for="">Masculino</label> <input type="radio" class="radio">
                <label for="">Feminino</label> <input type="radio" class="radio">
                <label for="">Não infomar</label> <input type="radio" class="radio"> <br> <br>
                <br>

                <label for="">Preferência de livros:</label> <br> <br>
                <label for="">Fantasia</label> <input type="checkbox" class="checkbox">
                <label for="">Terror</label> <input type="checkbox" class="checkbox">
                <label for="">Comédia</label> <input type="checkbox" class="checkbox"> <br>
                <label for="">Ficção Científica</label> <input type="checkbox" class="checkbox">
                <label for="">Biografia</label> <input type="checkbox" class="checkbox">
                <label for="">Romance</label> <input type="checkbox" class="checkbox"><br> <br>
                <input type="submit" class="button" value="Concluir"><br>
                <input type="reset" class="button" value="Resetar"><br>


            </div>
        </form>

    </div>

    <script src="./js/imagem.js"></script>
    <?php include_once 'includes/scripts.php' ?>

</body>

</html>