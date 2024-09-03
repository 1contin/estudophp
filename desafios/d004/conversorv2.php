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
        <h1>Conversor de moedas v2.0</h1>
        <p>
            <?php 
            $num = $_GET["real"] ?? 0;
            $formattedNum = number_format($num, 2, ",", ".");
            $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.10813/dados/ultimos/1?formato=json";
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            $dolar = $data[0]["valor"];
            $formattedDol = number_format($dolar, 2, ",", ".");
            $convertDol = $num/$dolar;
            $convertDolFormat = number_format($convertDol, 2, ",", ".");
            
            echo ("Seus R$ $formattedNum equivalem a <Strong>U$ $convertDolFormat</Strong>" . "<br>");
            ?>
        </p>
        <p>
            <?php
            echo ("Cotação obtida diretamente do site do" . " <a href='https://www.bcb.gov.br' target='_blank'>Banco Central do Brasil</a>");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>