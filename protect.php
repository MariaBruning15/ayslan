<head>
    <?php include_once 'includes/metadados.php' ?>
    <title>Protect</title>
</head>

<body>


    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {

    ?>
        <br>
        <div class="justify content-center d-flex flex-column" style="width:90%; margin-left:5%; margin-right:5%">
            <label class="mx-auto form-control is-invalid fs-5" for="floatingInputInvalid"> Você não pode acessar esta página porque não está logado.</label>
            <br>
            <a href="login.php" style="margin:auto;background-color: #1A4A65" class="btn fs-4 text-white btn-lg" role="button">Entrar</a></p>
        </div>


    <?php
        die();
    }

    ?>
</body>