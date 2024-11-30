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
                $preco = (float) $_POST['preco'];
                $percentual = (float) $_POST['percentual'];

                $valor_desconto = ($preco * $percentual) / 100;
                $preco_com_desconto = $preco - $valor_desconto;

                echo "<p> O Perimetro do retangulo é $perimetro</p>";

            }catch(Exception $e){
                echo "Error: " .$e->getMessage();
            }
        }
    
    ?>
</body>
</html>