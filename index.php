<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nostalgie</title>
</head>
<body>
    <div class="header">
        <p class="logo"><img src="img/0b8deede-7121-415f-8980-246b7f1fe478-removebg-preview.png" alt=""></p>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>

<div class="container">
<div class="linha-produtos">
    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgproduto">
                <img src="img/🗯.jpg" alt="" class="produtoMiniatura">
        </div>
            <div class="titulo">
                    <p>Jaqueta Motoqueiro Gangsta</p>
                    <h2>R$ 120</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>
    </form>

    <form action="filtros/criar.php" method="post">
        <div class="corpoProduto">
            <div class="imgproduto">
                <img src="img/Vintage shirt from @thedivisionspell on depop polyvore png made by @artoftheweirdoboy.jpg" alt="" class="produtoMiniatura">
        </div>
            <div class="titulo">
                    <p>Camisa Vintage Marrom</p>
                    <h2>R$ 70</h2>
                <input type="hidden" name="id_produto" value="">
                <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>
    </form>

</div>

<div class="barraLateral">
    <div class="topoCarrinho">
        <p>Meu Carrinho</p>
    </div>

    <div class="item-carrinho">
        <div class="linha-da-imagem">
           <img src="img/Vintage shirt from @thedivisionspell on depop polyvore png made by @artoftheweirdoboy.jpg" alt="" class="img-carrinho">
        </div>
        <p>Camiseta Vintage Marrom</p>
        <h2>R$ 70,00</h2>
        <form action="filtros/excluir.php" method="post">
            <input type="hidden" name="id_produto" value="">
            <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o"></i></button>
        </form>
    </div>

    <div class="item-carrinho-vazio">Seu carrinho está vazio.</div>
    <div class="rodape">
        <h3>Total</h3>
        <h2>R$ 70,00</h2>
        </div>
    </div>
</div>    
</body>
</html>
