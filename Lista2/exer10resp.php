<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $largura = (float) $_POST['largura'];
                $altura = (float) $_POST['altura'];

                $perimetro = 2 * ($largura + $altura);

                echo "<p> O Perimetro do retangulo é $perimetro</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>