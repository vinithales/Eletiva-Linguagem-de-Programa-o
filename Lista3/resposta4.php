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
            

                if($valor > 100){
                    $desconto = $valor * 0.15;
                    $novo_valor = $valor - $desconto;
                    echo "O novo valor é de $novo_valor";
                }

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>