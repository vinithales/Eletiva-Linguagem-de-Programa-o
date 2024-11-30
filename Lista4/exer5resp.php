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
    <main class="container">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                try {
                    $valor = (double) $_POST['valor'];
                    $valor = sqrt($valor);

                    echo "<p>A raiz desse número é {$valor} </p>";

                } catch (Exception $e) {
                    echo "Erro: " .$e->getMessage();
                }
            }
        ?>
    </main>
</body>
</html>