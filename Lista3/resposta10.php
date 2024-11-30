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
                $numero= (int) $_POST['valor'];
                

                echo "<h3>Tabuada do número $numero:</h3>";

                
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "$numero x $i = $resultado<br>";
                }
            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>