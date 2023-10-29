
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'includes/metadados.php' ?>
    <title>Cadastro</title>
</head>

<body>
<?php
    include("navbar.php");
    ?>
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
        <!-- Conteúdo do cabeçalho aqui -->

        <div class="row justify-content-center">
            <form action="inserir.php" method="POST" onsubmit="return validarFormulario()">
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
                    <input type="text" name="telefone" class "form-control border-primary-subtle" placeholder="Telefone" aria-label="Telefone" aria-describedby="basic-addon1">
                </div>

                <div class="col input-group mb-3">
                    <span class="input-group-text custom-background-color2 text-light border-primary-subtle" id="basic-addon1">Idade</span>
                    <input type="date" name="data" class="form-control border-primary-subtle" placeholder="Data de Nascimento" aria-label="Data de Nascimento" aria-describedby="basic-addon1">
                </div>

                <button type="submit" class="btn rounded-2 custom-background-color3 my-2 text-white btn-lg mx-1" style="width:150px">
                    Concluir
                </button>
                <button type="reset" class="btn rounded-2 custom-background-color3 text-white btn-lg mx-1" style="width:150px">
                    Resetar
                </button>
            </form>
        </div>
    </div>

    <script>
        function validarFormulario() {
            var nome = document.querySelector('input[name="nome"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var senha = document.querySelector('input[name="senha"]').value;
            var telefone = document.querySelector('input[name="telefone"]').value;

            if (nome === "" || email === "" || senha === "" || telefone === "") {
                alert("Por favor, preencha todos os campos do formulário.");
                return false; // Impede o envio do formulário
            }

            // Outras validações, se necessário

            return true; // Permite o envio do formulário
        }
    </script>

    <?php include_once 'includes/scripts.php' ?>
</body>

</html>