<?php
session_start();

if (!isset($_SESSION["ID"])) {
	echo "<script>location.href='exit'</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js" defer></script>
    <title>basicT</title>
</head>

<body>
    <div id="wrapper">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <div>
                    <a href="../" class="brand-logo" style="margin-left: 1cm">basicT</a>
                </div>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../"><img src="../../img/home.png"></a></li>
                    <li><a onclick="window.history.back();"><img src="../../img/arrowBack.png"></a></li>
                    <li><a onclick="window.history.forward();"><img src="../../img/arrowFoward.png"></a></li>
                    <li><a href="./"><img src="../../img/refresh.png" alt="Recarregar"></a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <form action="form.php" method="post">
                <h5>Nova venda</h5>
                <div class="card-panel" id="products">
                    <p>Preço final: <span id="fp">R$0.00</span></p>
                    <div class="flex">
                        <label>Insira o produto: <input name="prod" type="text" class="prods"></label>
                        <label>Insira o preço: <input type="text" name="price" class="price"></label>
                    </div>
                </div>
                <div style="display: flex;" id="disp">
                    <button onclick="createProduct()" class="btn blue darken-2" type="button">Adicionar produto</button>
                    <button onclick="calcPrice()" class="btn green darken-1" id="calcPriceBtn" type="button">Calcular preço</button>
                    <input type="submit" value="Vender" class="btn green darken-1" id="saleInput">
                </div>
                <input type="hidden" name="total_price" id="total_price" value="0">
                <input type="hidden" name="products_data" id="products_data" value="">
            </form>
        </div>
    </div>
</body>

</html>