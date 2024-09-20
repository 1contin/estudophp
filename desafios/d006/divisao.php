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
            $divisor = $_GET["divisor"] ?? 1;
        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action=<?=$_SERVER['PHP_SELF']; ?> method="get">
            <label for="dividendo">Dividendo: <input type="number" name="dividendo" min="0" id="dividendo" value=<?=$dividendo?>></label>
            <label for="dividendo">Divisor: <input type="number" name="divisor" min="1" id="divisor" value=<?=$divisor?>></label>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <?php
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>