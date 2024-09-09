<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 05</title>
</head>
<body>
    <main>
        <h1>Analisador de números</h1>
        <?php 
            $num = $_REQUEST["número"] ?? 0;
            echo ("<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> infromado pelo usuário: </p>");
        ?>
        <?php 
            $numInt = (int) $num;
            $numFloat = (float) $num;
            $Float = $numFloat - $numInt;
            echo ("<ul>
                     <li>A parte inteira do número é <strong>". number_format($numInt, 0, ",", ".") ."</strong></li>
                     <li>A parte fracionária do número é <strong>". number_format($Float, 3, ",", ".") ."</strong></li>
                  </ul>");
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>