<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/box.css" media="screen" />
    <?php include_once 'includes/metadados.php' ?>
    <title>Box</title>
</head>

<body>

    <?php
    include_once 'navbar.php';
    ?>

    <div class="baixo">
        <div class="procurados text-center">MAIS PROCURADOS</div>
    </div>

    <div class="baixo2 justify-content-center">
        <div class="nome">O Povo do Ar</div>
        <img class="ar" src="./imgs/boxAr.png" />
        <a href="boxpda.php" class="btn text-white" role="button" style="background-color: #1A4A65">Ver mais</a>
    </div>

    <div class="baixo3 justify-content-center">
        <div class="nome2">Trono de Vidro</div>
        <img class="tog" src="./imgs/togBox.png" />
        <a href="boxtdv.php" class="btn text-white" role="button" style="background-color: #1A4A65">Ver mais</a>
    </div>


    <div class="baixo4 justify-content-center">
        <div class="nome2">Percy Jackson</div>
        <img class="tog" src="./imgs/percyBox.png" />
        <a href="boxpjo.php" class="btn text-white" role="button" style="background-color: #1A4A65">Ver mais</a>
    </div>

    <?php include_once 'includes/scripts.php' ?>
</body>

</html>