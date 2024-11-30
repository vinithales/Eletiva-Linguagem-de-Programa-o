<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="m-3">Resposta do Exercicio 3</h1>
    <div class="row">
        <div class="col m-3">
            <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    try{
                        $valor1 = (int) $_POST['valor1'] ?? 0;
                        $valor2 = (int) $_POST['valor2'];

                        $resultado = $valor1 - $valor2;
                         echo $resultado;
                    }catch(Exception $e){
                        echo "Error" .$e->getMessage();
                    }
                }

            ?>
        </div>
    </div>
</body>
</html>