<?php
    declare(strict_types=1);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <?php


            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                try {
                    $day = (int) $_POST['day'];
                    $month = (int) $_POST['month'];
                    $year = (int) $_POST['year'];

                    if(checkdate($month, $day, $year)){
                        echo "<p>Essa data é válida </p>";
                    }
                    else{
                        echo "<p>Essa data é inválida</p>";
                    }
                } catch (Exception $e) {
                    echo "Erro: " .$e->getMessage();
                } 
            }

        ?>
    </main>
</body>
</html>

