<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Superglobais</h1>
    </header>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "Segunda", time() + 3600);
                echo ("<h1>Superglobal GET</h1>");
                var_dump($_GET);

                echo ("<h1>Superglobal POST</h1>");
                var_dump($_POST);

                echo ("<h1>Superglobal REQUEST</h1>");
                var_dump($_REQUEST);

                echo ("<h1>Superglobal COOKIE</h1>");
                var_dump($_COOKIE);

                echo ("<h1>Superglobal SESSION</h1>");
                var_dump($_SESSION);
            ?>
        </pre>
    </main>
</body>
</html>