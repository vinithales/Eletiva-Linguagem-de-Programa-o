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
                $tempo = (float) $_POST['tempo'];
                $distancia = (float) $_POST['distancia'];

                $velociade_media = $distancia / $tempo;
                echo "<p> A velocidade média é $velocidade_media</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>