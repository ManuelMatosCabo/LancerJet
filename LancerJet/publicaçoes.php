<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LancerJet</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="icon" href="images/jet.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <?php include_once('includes/menu.php') ?>
    <?php include_once('includes/get.php') ?>

    <div class="container-fluid image-container pb-5" style="height: 100%; min-height: 1000px;">
        <h1 class="text-center mb-5 pt-5" style="color: #1F2833;">Tens aqui as publicações que procuras!
        </h1>
        <div class="box-search text-center mb-5">
            <input type="search" class="form-control w-25" placeholder="Pesquisar por linguagem" id="pesquisar" name="search">
            <button onclick="searchData()" class="btn"><img src="images/search.png" alt="" style="max-width: 22px">
            </button>
        </div>
        <div class="bordered-div pb-2 central-content" style="width: 90%; background-color: rgba(168, 171, 169, 0.05);">
            <div class="form-group col-md-6 my-3">
                <div class="central-content" id="resultados" style="width: 100%;">
                    <div class="row">
                        <?php                       
                        while ($row = mysqli_fetch_assoc($dados)) {
                            echo '<div class="col-md-2 m-0">';
                            echo '<img src="images/' . $row['tipo'] . '.png" style="max-width: auto;" class="p-4 text-center img-fluid"';
                            echo 'style="width: 75%; height: 75%;" alt="">';
                            echo '</div>';
                            echo '<div class="col-md-4 py-2" style="height: 50%;">';
                            echo '<div class="row">';
                            echo '<h5 class="pt-2 mx-0" style="float: left; color: #275a7d;">Nome Autor: <label style="color: #275a7d">' . $row['nome_completo'] . '</label></h5>';
                            echo '</div>';
                            echo '<div class="row">';
                            echo '<h5 class="pt-5 mx-0" style="float: left; color: #275a7d;">Nome do projeto: <label style="color: #275a7d">' . $row['nome_projeto'] . '</label></h5>';
                            echo '</div>';
                            echo '<div class="row">';
                            echo '<h5 class="pt-5 my-2 mx-0 pb-2" style="float: left;  color: #275a7d;">Linguagem: <label style="color: #275a7d">' . $row['linguagem'] . '</label></h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-6 py-2">';
                            echo '<div class="row">';
                            echo '<h5 class="pt-2 mx-0" style="float: left; margin-left: 40px; color: #275a7d;">Descrição do projeto: <label style="color: #275a7d">' . $row['descricao'] . '</label></h5>';
                            echo '</div>';
                            echo '<div class="row">';
                            echo '<h5 class="pt-4 mx-0" style="float: left; margin-left: 40px; color: #275a7d;">Contacto: <label style="color: #275a7d">' . $row['contacto'] . '</label></h5>';
                            echo '</div>';
                            echo '<div class="row">';
                            echo '<h5 class="pt-4 mx-0" style="float: left; margin-left: 40px; color: #275a7d;">Valor: <label style="color: #275a7d">' . $row['orcamento'] . ' €</label></h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '<hr>';
                        }
                        mysqli_close($conexao);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('includes/rodape.php') ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                searchData();
            }
        });

        function searchData() {
            window.location = 'publicaçoes.php?search=' + search.value;
        }
    </script>

</body>

</html>