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
                $data1 = (string) $_POST['data1'];
                $data2 = (string) $_POST['data2'];
                $data1 = strtotime($data1);
                $data2 = strtotime($data2);

                $diferenca = abs(($data2 - $data1) / (60 * 60 * 24));
                echo "A diferença entre as duas datas é de " . (int)$diferenca . " dias.";

            } catch (Exception $e) {
                echo "Erro: " .$e->getMessage();
            }
        }

    ?>

</body>
</html>