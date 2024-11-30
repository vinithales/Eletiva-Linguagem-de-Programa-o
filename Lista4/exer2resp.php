<?php
    declare(strict_types=1);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="content">
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                try {
                    $palavra = (string) $_POST['palavra'];

                    $palavraMaiuscula = strtoupper($palavra);
                    $palavraMinuscula = strtolower($palavra);

                    echo "Palavra maiuscula: " .$palavraMaiuscula. " Palavra minuscula: " .$palavraMinuscula;

                } catch (\Throwable $th) {
                    echo "Error: " .$th->getMessage();
                }
            }
        ?>
    </main>
</body>
</html>