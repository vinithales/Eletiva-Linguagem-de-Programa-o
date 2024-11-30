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
                $celsius = (float) $_POST['tempC'];

                $fahrenheit = ($celsius * 1.8) + 32;

                echo "<p> A temperatura em Fahrenheit é: $fahrenheit </p> ";
            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    ?>
</body>
</html>