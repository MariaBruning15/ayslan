<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="css/sagas.css" media="screen" />
    <?php include_once 'includes/metadados.php' ?>
    <title>Sagas</title>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
   

    <?php include_once 'includes/scripts.php' ?>
<div class="botoes">

<a href="autores.php" class="grupo-link"> Senhor dos Anéis</a>
            <a href="sagas.php" class="grupo-link">As Crônicas de Nárnia</a>
            <a href="box.php" class="grupo-link">PErcy Jackson</a>
            <a href="editoras.php" class="grupo-link">Jogos Vorazes</a>
</div>

    <style>
 *{
  margin:0;
  padding: 0;
  box-sizing: 0;
   }
   body{
    height: 100vh;
    width: 100vw;
    background-image: url('./imgs/plano.png');
   }
   .botoes {
          background-color:#1A4A65;
            width: 1010px;
            height: 180px;
            margin-left: 270px;
            margin-top: 200px;
            display: flex; /* Para usar espaçamento interno (padding) entre os botões */
            gap: 10px; /* Espaçamento entre os botões */
            align-items: flex-start; /* Alinhar os botões à esquerda */
            padding: 20px; /* Adicionar espaçamento interno para espaçamento entre os botões */
            border-radius: 30px;
        }
    
   </style>
</body>

</html>