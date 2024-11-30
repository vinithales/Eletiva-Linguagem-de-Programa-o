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
                

                do {
                    echo $numero . "<br>";
                    $numero--;
                } while ($numero >= 1);

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>