<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <title>Login</title>
</head>
<?php
    include("navbar.php");
    ?>
<body>
    <div class="container p-5 custom-background-color my-5 rounded-2">
        <h1 class="título custom-color text-center my-2 mb-4 fs-1 text fw-bold">Login</h1>
        <p class="p text-center fs-5 text">Não possui uma conta?</p>
        <p class="p text-center mb-5 fs-5 text">Realizar <a href="cadastro.php" class="link custom-color2" style="text-decoration: none;">cadastro</a></p>


        <div class=" container text-center">
            <form action="validalogin.php" method="post">
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

                <div class="row align-items-center justify-content-evenly">
                    <div class="col-4 input-group mb-3">
                        <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1">E-mail</span>
                        <input type="text" name="email" class="form-control border-primary-subtle" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1" style="margin-left: 10%;">Senha</span>
                        <input type="text" name="senha" class="form-control border-primary-subtle" placeholder="Senha" aria-label="senha" aria-describedby="basic-addon1">

                    </div>

                </div>
        </div>

        <div class="row align-items-center justify-content-evenly">


            <button type="submit" class="btn rounded-2 custom-background-color3 my-2 text-white btn-lg mx-1" style="width:150px">
                Concluir
            </button>
            <button type="reset" class="btn rounded-2 custom-background-color3 text-white btn-lg mx-1" style="width:150px">
                Resetar
            </button>

        </div>


    </div>

    </form>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>