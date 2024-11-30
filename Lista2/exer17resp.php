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
                $capital = (float) $_POST['capital'];
                $taxa = (float) $_POST['taxa'];
                $periodo = (float) $_POST['periodo'];
                
                $juros_simples = $capital * $taxa * $periodo;

                echo "<p> O Juros simples é de $juros_simples</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>