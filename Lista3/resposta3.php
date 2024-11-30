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
                $valorA = (float) $_POST['valorA'];
                $valorB = (float) $_POST['valorB'];

                if ($valorA == $valorB) {
                    echo "Os valores são iguais: $valorA";
                } else {
                    if ($valorA < $valorB) {
                        echo "$valorA $valorB";
                    } else {
                        echo "$valorB $valorA";
                    }
                }

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>