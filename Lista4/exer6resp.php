<?php
    declare(strict_types=1);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $valor = (double) $_POST['valor'];

                $valor = round($valor);

                echo "<p>O número arredondado é: {$valor}</p>";
            } catch (Exception $e) {
                echo "ERRO: " .$e->getMessage();
            }
        }
    ?>
</body>
</html>