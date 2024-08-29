<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulacao de strings em PHP</title>
</head>
<body>
    <h1>Manipulacao de strings</h1>
    <?php 
    $nome = "Carlos";
    $sobrenome = "Santos";
    $apelido = "Porcao";
    $nom = "Rodrigo";
    $snom = "Nogueira";
    const ESTADO = "SP";
    const CANAL = "Curso em video \u{1F499}";

    // Ex com variavel
    echo "$nome $sobrenome \u{1F60E}<br>"; 
    echo ' $nome $sobrenome \u{1F60E}<br>';

    //Ex com constante, utilizando concatenacao
    echo "Moro em " .ESTADO ."<br>";
    echo "Eu gosto do " .CANAL ."<br>";


    // Escape Sequences

    // |  \n = quebra de linha
    // |  \t = tabulação
    // |  \\ = barra invertida
    // |  \$ = $
    // |  \u{ } = unicode
    // |  \0 = nulo

    echo "$nom \"Minotauro\" $snom<br>";
    // NO caso de aspas simples a unica sequencia de escape que funciona e a contra barra + aspas simples.

    echo "$nome \"$apelido\" $sobrenome<br>";
    ?>


</body>
</html>