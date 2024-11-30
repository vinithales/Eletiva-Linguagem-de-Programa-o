<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{

                $valor = $_POST['valor'];
                $qtd_caracteres = strlen($valor);
                echo "<p>Quantidade de caracteres é $qtd_caracteres</p>";
                $maiusculo = strtoupper($valor);
                $minusculo = strtolower($valor);
                echo "<p>Maiúsculo: $maiusculo</p>";
                echo "<p>Minusculo: $minusculo</p>";

                $dia = 30;
                $mes = 2;
                $ano = 2023;

                if (checkdate($mes, $dia, $ano)) {
                    echo "<p>Data válida!</p>";
                }else {
                    echo "<p>Data inválida!</p>";
                }

                #Função Numérica
                $menor = min(1,2,3,4,5,6);
                echo "<p> Menor valor: $menor</p>";
                $maior = max(1,2,3,4,5,6);
                echo "<p> Maior valor: $maior</p>";
                $aleatorio = rand(1, 100);
                echo "<p>Aleatório: $aleatorio</p>";

                $numero = 156.98;
                $moeda = number_format($numero, 2, ",", ".");
                echo "<p>R$ $moeda</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }


    ?>    
</body>
</html>