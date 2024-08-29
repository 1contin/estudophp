<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>hehehe</title>
</head>
<body>
    <header>
        <h1>Parabens!!!</h1>
    </header>
    <main>
       <?php
           $n = $_GET["nome"];
           $s = $_GET["sobrenome"];
           //var_dump($_GET); // $_REQUEST = $_POST + $_GET + $_COOKIES
           echo "<p>E um prazer te conhecer, <strong>$n $s</strong>!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>