<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/metadados.php'?> 
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <title>Bookverso</title>
</head>

<body>
    <?php
    include_once 'navbar.php';
    ?>


    <div class="lancamento-livros">
        <div id="new" class="livro-novo">

            <img class="livronovo-img" src="imgs/livronovo.png" />
            <div class="lancamento">
                <h1>NOVO LANÇAMENTO! </h1>
                <h2 class="introducao-novo"> Dois físicos rivais colidem em meio a um turbilhão de disputas acadêmicas e
                    caóticos namoros de mentira nesta nova comédia romântica da autora de A hipótese do amor.
                    "Ali Hazelwood é uma verdadeira potência dos romances." – Christina Lauren, autora de Imperfeitos
                </h2>
                <button id="esconder" class="botao">OK</button>
            </div>
        </div>
        <div class="p1">
            <p> Mais vendidos </p>
        </div>

        <div class="baixo-livros">
            <div class="linha">
                <div class="livro">


                    <div class="img-livro">
                        <img src="imgs/principe.png">
                    </div>
                    <div class="detalhes-livro">
                        <h3 class="avaliacoes2">3.863 </h3>
                        <h3 class="autora2">Taylor Jenkins Reid </h3>
                        <h2 class="introducao2"> O Pequeno Príncipe é uma obra prima que conduz o leitor a uma viagem de
                            descobertas pela essência humana.Este clássico atemporal de Antoine de Saint-Exupéry narra a
                            história sobre o encontro de um aviador e um menino com “cabelos da cor do ouro”. À medida
                            que o principezinho conta ao aviador sobre sua rotina no asteroide B 612, sua rosa única, o
                            perigo dos baobás, sua raposa e os moradores de outros planetas, um novo
                            olhar sobre a vida e o mundo é revelado. </h2>
                    </div>
                </div>
                <div class="livro">


                    <div class="img-livro">
                        <img src="imgs/7maridos.png">
                    </div>
                    <div class="detalhes-livro">
                        <h3 class="avaliacoes">2.931 </h3>
                        <h3 class="autora"> Antoine de Saint-Exupéry </h3>
                        <h2 class="introducao"> O Pequeno Príncipe é uma obra prima que conduz o leitor a uma viagem de
                            descobertas pela essência humana.Este clássico atemporal de Antoine de Saint-Exupéry narra a
                            história sobre o encontro de um aviador e um menino com “cabelos da cor do ouro”. À medida que o
                            principezinho conta ao aviador sobre sua rotina no asteroide B 612, sua rosa única, o perigo dos
                            baobás, sua raposa e os moradores de outros planetas, um novo
                            olhar sobre a vida e o mundo é revelado. </h2>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bibliotecas/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $("#esconder").click(function() {
                $("#new").hide();
            });
        });
    </script>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>