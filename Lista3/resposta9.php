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
                

                $fatorial = 1;

                // Loop for para calcular o fatorial do número
                for ($i = 1; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>