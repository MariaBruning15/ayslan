<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <link rel="stylesheet" type="text/css" href="./css/nav.css">
    <title></title>
</head>

<body>
    <div class="div-logo">

        <a href="index.php"><img class="logo" src="./imgs/logo.png"></a>
        <div class="tools">
            <div class="cadastro">
                <a href="cadastro.php" class="cadastro-link"> Cadastro </a>
            </div>
            <div class="login">
                <a href="login.php" class="login-link"> Login </a>
            </div>
            <div class="perfil d-flex flex-column">
                <a href="perfil.php"><img class="perfil-img" src="./imgs/perfil.png"></a>
                <label for="" class="text-white mt-1 mx-auto">Nome</label>
            </div>
            <div class="carrinho">
                <a href="carrinho.php"><img class="carrinho-img" src="./imgs/carrinho.png"></a>
            </div>
            <div class="ferramenta">
                <a href="configura.php"><img class="ferramenta-img" src="./imgs/ferramenta.png"></a>
            </div>

        </div>
        <div class="home">
            <a href="index.php" class="home-link"> <img class="home-img" src="./imgs/home.png"></a>
            <input type="text" class="textbox" placeholder="Pesquisar" list="sugestoes">
            <datalist id="sugestoes">
                <option value="O pequeno príncipe">
                <option value="Os sete maridos de Evelyn Hugo">
                <option value="Percy Jackson e o Ladrão de Raios">
                    <!-- Adicione mais sugestões conforme necessário -->
            </datalist>
            <a href="autores.php" class="grupo-link"> Autores</a>
            <a href="sagas.php" class="grupo-link">Sagas</a>
            <a href="box.php" class="grupo-link">Box</a>
            <a href="editoras.php" class="grupo-link">Editoras</a>
            <a href="duvida.php"><img class="duvida-img" src="imgs/duvida.png"></a>


        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bibliotecas/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>