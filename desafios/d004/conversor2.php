<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>
       <?php
    $num = $_GET["real"] ?? 0;

    // Função para pegar a última sexta-feira
    function getLastBusinessDay() {
        $today = new DateTime();
        $dayOfWeek = $today->format('N'); // 1 = segunda-feira, 7 = domingo

        if ($dayOfWeek >= 6) {
            // Se for sábado (6) ou domingo (7), voltar para a sexta-feira
            $daysToSubtract = $dayOfWeek - 5;
            $today->modify("-{$daysToSubtract} days");
        }

        return $today->format('m/d/Y');
    }

    // URL padrão para buscar a cotação do dólar
    $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.10813/dados/ultimos/1?formato=json";

    // Verificar se é fim de semana e ajustar a data para a última sexta-feira
    $dayOfWeek = 6; // 1 (segunda) a 7 (domingo) *OBS LEMBRAR DE ALTERAR A VARIAVEL PARA: date('N')*
    if ($dayOfWeek == 6 || $dayOfWeek == 7) {
        // Fim de semana: usar a data da última sexta-feira
        $lastBusinessDay = getLastBusinessDay();
        $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.10813/dados?dataInicial=$lastBusinessDay&dataFinal=$lastBusinessDay&formato=json";
    }

    // Fazer a requisição à API
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    var_dump($data);
    // Verificar se a resposta da API está vazia ou não retornou dados
    if (empty($data)) {
        echo "<p>Não foi possível obter a cotação. Tente novamente mais tarde.</p>";
    } else {
        $dollarQuote = $data[0]["valor"];
        $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $convertDol = $num / $dollarQuote;
        $convertDolFormat = round($convertDol, 2);
        // Exibir os valores formatados
        echo ("<p>Seus " . numfmt_format_currency($default, $num, "BRL") . " equivalem a <strong> " . numfmt_format_currency($default, $convertDolFormat, "USD") . "</strong></p>");
    }
?>

        <p>
            <?php
            echo ("<p>Cotação obtida diretamente do site do" . " <a href='https://www.bcb.gov.br' target='_blank'>Banco Central do Brasil</a>" . "</p>");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>