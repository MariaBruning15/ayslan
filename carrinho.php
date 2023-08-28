<!DOCTYPE html>
<html>

<html lang="en">

<head>
    <?php include_once 'includes/metadados.php' ?>
    <link rel="stylesheet" type="text/css" href="./css/carrinho.css">
    <title>Carrinho</title>
</head>

<body>
    <div class="container text-center p-5 custom-background-color my-5 rounded-2">
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

        <h1 class="título custom-color text-center my-2 mb-4 fs-1 text fw-bold mb-2">Carrinho</h1>
        <a href="index.php" class="mb-5 link-opacity-25-hover">Voltar</a>

        <table class="bg-white rounded-2 table-hover ">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Livro</td>
                <td>25</td>
                <td>1</td>
                <td>25</td>
            </tr>

        </table>
    </div>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>