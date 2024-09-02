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
            $dolar = $num / 5.61;
            echo ("Seus R$ $num, equivalem a U$$dolar" . "<br>");
            ?>
            <span>Cotação fixa de R$5,61 informada diretamente no código.</span>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>