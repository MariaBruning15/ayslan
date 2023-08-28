
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'includes/metadados.php' ?>
    <title>Cadastro</title>
</head>

<body>
    <style>
        .custom-color {
            color: #3A478E;
        }

        .custom-color2 {
            color: #3A7A8E;
        }

        .custom-background-color {
            background-color: #B1CCD4;
        }

        .custom-background-color2 {
            background-color: #3A7A8E;
        }

        .custom-background-color3 {
            background-color: #3A478E;
        }
    </style>

    <div class="container p-5 custom-background-color my-5 rounded-2 text-center">

        <h1 class="título custom-color text-center my-2 mb-4 fs-1 text fw-bold">Cadastro</h1>
        <p class="p text-center fs-5 text">Já possui uma conta?</p>
        <p class="p text-center mb-5 fs-5 text">Realizar <a href="login.php" class="link custom-color2" style="text-decoration: none;">login</a></p>

        <div class="row justify-content-center ">
            <form action="inserir.php" method="POST">
                <div class="col input-group mb-3 align-items-center">

                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1">Nome</span>
                    <input type="text" name="nome" class="form-control border-primary-subtle" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">

                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1" style=" margin-left:20px">E-mail</span>
                    <input type="text" name="email" class="form-control border-primary-subtle" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">

                </div>

                <div class="col input-group mb-3">
                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1">Senha</span>
                    <input type="text" name="senha" class="form-control border-primary-subtle" placeholder="Senha" aria-label="senha" aria-describedby="basic-addon1">

                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1" style="margin-left:20px;">Telefone</span>
                    <input type="text" name="telefone" class="form-control border-primary-subtle" placeholder="Telefone" aria-label="Telefone" aria-describedby="basic-addon1">
                </div>

                <div class="col input-group mb-3">

                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1">Idade</span>
                    <input type="date" name="data" class="form-control border-primary-subtle" placeholder="Telefone" aria-label="Telefone" aria-describedby="basic-addon1">
                </div>


                <!--<div class="col">
                    <div class="col w-50 d-inline-block" style="width: 50%;">
                        <label class="fs-4 text custom-color">Gênero:</label> <br> <br>
                        <label for="">Masculino</label> <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                        <label for="">Feminino</label> <input type="radio" class="radio">
                        <label for="">Não infomar</label> <input type="radio" class="radio"> <br> <br>
                        <br>

                        <label for="">Preferência de livros:</label> <br> <br>
                        <label for="">Fantasia</label> <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                        <label for="">Terror</label> <input type="checkbox" class="checkbox">
                        <label for="">Comédia</label> <input type="checkbox" class="checkbox"> <br>
                        <label for="">Ficção Científica</label> <input type="checkbox" class="checkbox">
                        <label for="">Biografia</label> <input type="checkbox" class="checkbox">
                        <label for="">Romance</label> <input type="checkbox" class="checkbox"><br> <br>
                         -->
                <button type="submit" class="btn rounded-2 custom-background-color3 my-2 text-white btn-lg mx-1" style="width:150px">
                    Concluir
                </button>
                <button type="reset" class="btn rounded-2 custom-background-color3 text-white btn-lg mx-1" style="width:150px">
                    Resetar
                </button>


        </div>
    </div>

    </form>

    </div>
    </div>

    <script src="./js/imagem.js"></script>
    <?php include_once 'includes/scripts.php' ?>

</body>

</html>