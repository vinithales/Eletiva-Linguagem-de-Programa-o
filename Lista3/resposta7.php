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
                $valor = (float) $_POST['valor'];
            

                $soma = 0;
                $i = 1;

      
                while ($i <= $numero) {
                     $soma += $i;
                     $i++;
                     }

    
                echo "<p>A soma de todos os números de 1 até $numero é: $soma</p>";
    

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>