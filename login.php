<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <title>Login</title>
</head>

<body>

    <h1 class="título">Login</h1>
    <p class="p">Não possui uma conta?</p>
    <p class="p">Realizar <a href="cadastro.php" class="link">cadastro</a></p>


    <div class="flex-container">
        <form action="./bancodedados/validalogin.php" method="post">
            <div class="col">
                <span class="input-group-text" id="basic-addon1">E-mail</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                <input type="password" name="senha" placeholder="senha" class="texto"><br>

            </div>

            <div class="flex-item">

                <button type="submit" class="button">
                    Concluir
                </button><br>
                <button type="reset" class="button">
                    Resetar
                </button>

            </div>
            <div>


            </div>
        </form>
        <?php include_once 'includes/scripts.php' ?>
</body>

</html>