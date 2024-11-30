<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Resposta exercicio 9</h1>
   <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $raio = (float) $_POST['raio'];

                $area = (pi() * ($raio ** 2));

                echo "<p>A área desse circulo é de $area</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
   
   ?>
</body>
</html>