<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resposta do exericio 8</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $largura = (float) $_POST['largura'];
                $altura = (float) $_POST['altura'];

                $area = $largura * $altura;
                echo "<p>A área do retangulo é $area</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    ?>
</body>
</html>