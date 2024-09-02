<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <header>
        <h1>Funções aritméticas</h1>
    </header>
    <main>
        <?php
        $res = abs(-16);
        echo("O valor da base é $res <br>");
        ?>
        
        <?php
        $res = base_convert(12, 10, 2);
        echo("O valor convertido é $res <br>");
        ?>
        <?php
        ?>
    </main>
</body>
</html>