<!DOCTYPE html>
<html lang="pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $salario = $_GET['salario'] ?? 0;
        $salarioMin = 1_302.00;
        ?>
        <h1>Informe seu salário</h1>
        <form action=<?=$_SERVER['PHP_SELF'];?> method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="$salario" step="0.01">
            <p>Considerando o salário mínimo de <strong><?=number_format($salarioMin, 2, ',', '.')?></strong></p>
            <input type="submit" value="Calcular" >
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $quantSalarioMin = intdiv($salario, $salarioMin);
        $resto = $salario % $salarioMin;
        
            echo "<p>Quem recebe um salário de R$" . number_format($salario, 2, ',' , '.') . " ganha <strong>$quantSalarioMin salários mínimos</strong> + R\$" . number_format($resto, 2, ',', '.'). ".";

        ?>
    </section>
</body>  
</html>