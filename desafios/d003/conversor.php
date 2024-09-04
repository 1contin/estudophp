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
            <?php 
            $num = $_GET["real"] ?? 0;
            $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $dollarQuote = 5.61;
            $convertedValue = $num / $dollarQuote;
            echo ("<p>Seus " . numfmt_format_currency($default, $num, "BRL") . " equivalem a <Strong> " . numfmt_format_currency($default, $convertedValue, "USD") . "</Strong>" . "</p>");
            ?>
            <?php
            echo ("<p> <Strong>Cotação fixa de</Strong> R$ $dollarQuote informada diretamente no código. </p>");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>