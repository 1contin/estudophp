<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <p>
            <?php 
            $num = $_GET["real"] ?? 0;
            $numFormat = number_format($num, 2, ",", ".");
            $dolar = $num / 5.61;
            $dolarFormat = number_format($dolar, 2, ",", ".");
            echo ("Seus R$ $numFormat equivalem a <Strong>U$ $dolarFormat</Strong>" . "<br>");
            ?>
        </p>
        <p>
            <?php
            echo ("<Strong>Cotação fixa de</Strong> R$5,61 informada diretamente no código.");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>