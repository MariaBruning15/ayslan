<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sagas.css" media="screen" />
    <?php include_once 'includes/metadados.php' ?>
    <title>Sagas</title>
</head>
<body>
    <?php
    include("navbar.php");
    ?>
       <div class="titulo-fundo">
        <div class="titulo">
            <h1>Sagas</h1>
        </div>
    </div>
    

    <?php include_once 'includes/scripts.php' ?>
    <div class="botoes">
        <a href="senhoraneis.php" class="grupo-link">Senhor dos Anéis</a>
        <a href="narnia.php" class="grupo-link">As Crônicas de Nárnia</a>
        <a href="pjo.php" class="grupo-link">Percy Jackson</a>
        <a href="jogosvorazes.php" class="grupo-link">Jogos Vorazes</a>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Correção para o box-sizing */
        }
        body {
            height: 100vh;
            width: 100vw;
            background-image: url('./imgs/plano.png');
        }
        .botoes {
            background-color: #1A4A65;
            width: 1400px;
            height: 180px;
            margin-left: 70px;
            margin-top: 100px;
            display: flex;
            gap: 10px;
            align-items: flex-start;
            padding: 20px;
            border-radius: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
        }
        .titulo {
            margin-top: 70px; /* Espaçamento superior */
            text-align: center; /* Centraliza horizontalmente */
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 60px;
        }
        .titulo-fundo {
            background-color: #1A4A65;
            padding: 20px;
            border-radius: 10px;
            margin-top: 70px;
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 60PX;
            width: 200px;
            margin-left: 680px;
        }
    </style>
</body>
</html>
