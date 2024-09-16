<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $dividendo = $_GET["dividendo"] ?? 0;
            $divisor = $_GET["divisor"] ?? 0;
        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action=<?=$_SERVER['PHP_SELF']; ?> method="get">
            <label for="dividendo">Dividendo: <input type="number" name="dividendo" id="dividendo" value=<?=$dividendo?>></label>
            <label for="dividendo">Divisor: <input type="number" name="divisor" id="divisor" value=<?=$divisor?>></label>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
        $quociente = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        var_dump($quociente);
        echo ("<p>O quociente é igual a: <strong>$quociente</strong><br></p>");
        echo ("<p>O resto da divisão é igual a: <strong>$resto</strong><br></p>");
        ?>
</body>
</html>