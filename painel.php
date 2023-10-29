<?php

include('protect.php');

    include("navbar.php");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body>


    <div class="container p-5 custom-background-color my-5 rounded-2">
        <h1 class="título custom-color text-center my-2 mb-4 fs-1 text fw-bold">Painel</h1>
        <p class="p text-center fs-5 text"> Bem vindo ao Painel, <?php echo $_SESSION['nome'] ?>.</p>


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

        </div>

        <div class="row align-items-center justify-content-center">

                <a href="logout.php" class="btn rounded-2 custom-background-color3 my-2 text-white btn-lg mx-3" style="width:150px" role="button">Sair</a>
                <a href="index.php" class="btn rounded-2 custom-background-color3 my-2 text-white btn-lg mx-3" style="width:250px" role=" button">Voltar para o site </a>

            </div>
</body>

</html>