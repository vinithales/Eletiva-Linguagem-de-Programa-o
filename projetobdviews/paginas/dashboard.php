<?php

require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/plantios.php';

// Função que gera os dados para o gráfico
$dados = gerarDadosGrafico();
?>

<main class="container">
    <div class="container mt-5">
        <h2>Dashboard de Plantios</h2>

        <!-- Div onde o gráfico será renderizado -->
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>

    <!-- Inclusão da biblioteca Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Carregar a biblioteca do Google Charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Array de dados que será usado no gráfico
            var data = google.visualization.arrayToDataTable([
                ['Espécie', 'Quantidade de Plantios', {
                    role: 'style'
                }], // Definição do título das colunas
                <?php foreach ($dados as $d): ?>['<?= $d['especie'] ?>', <?= $d['quantidade'] ?>, 'green'], // Usando a espécie e a quantidade de plantios
                <?php endforeach; ?>
            ]);

            // Opções de customização do gráfico
            var options = {
                title: 'Quantidade de Plantios por Espécie',
                hAxis: {
                    title: 'Espécies',
                    titleTextStyle: {
                        color: '#333'
                    }
                }, // Eixo horizontal
                vAxis: {
                    minValue: 0
                }, // Eixo vertical, começa do zero
                chartArea: {
                    width: '70%',
                    height: '70%'
                }, // Área do gráfico
                bars: 'horizontal' // Tipo de gráfico (barras horizontais)
            };

            // Renderizar o gráfico na div com id 'chart_div'
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

</main>

<?php require_once 'rodape.php'; ?>