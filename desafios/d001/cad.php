<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $num = $_GET["num"] ?? 0;
            echo ("O número escolhido foi " . "<Strong>$num</Strong>" . "<br>");
            echo ("O seu <em>antecessor</em> é " . $num - 1 . "<br>");
            echo ("O seu <em>sucessor</em> é " . $num + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>