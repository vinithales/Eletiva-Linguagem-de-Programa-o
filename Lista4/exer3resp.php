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
    <?php
    function verificar(string $frase, string $palavra) : void{
        if (strpos($frase, $palavra) !== false) {
            echo "Palavra '{$palavra}' presente em '{$frase}'";
        } else {
            echo "A palavra '{$palavra}' não está presente em '{$frase}'";
        }
    }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $palavra1 = (string) $_POST['palavra1'];
                $palavra2 = (string) $_POST['palavra2'];

                
                verificar($palavra1, $palavra2);

            } catch (\Throwable $th) {
                echo "Error: " .$th->getMessage();
            }
            
        }

    ?>
</body>
</html>