<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do formulário retroalimentados
            $v1 = $_GET["v1"] ?? 0;
            $v2 = $_GET["v2"] ?? 0;
        ?>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="v1">Valor 1: <input type="number" name="v1" id="v1" value="<?=$v1?>"></label>
            <label for="v2">Valor 2: <input type="number" name="v2" id="v2" value="<?=$v2?>"></label>
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
            <?php 
            $soma = $v1 + $v2;
            echo ("<p>O resultado da soma entre os valores $v1 e  $v2 é: <strong>$soma</p></strong>"); ?>
    </section>
</body>
