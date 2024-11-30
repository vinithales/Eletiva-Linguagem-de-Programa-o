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
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
            try{
                $valor1 = (float) $_POST['valor1'];
                $valor2 = (float) $_POST['valor2'];

                $resultado = $valor1 + $valor2;
                if($valor1 == $valor2){
                    $resultado = $resultado * 3;
                     return "<p>O resultado é de  $resultado e os dois valores são iguais </p>";
                } else{
                    echo "<p>O resultado é de  $resultado </p>";
                }
            

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>