<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Hoje é dia <?php
    
    echo date("d/m/Y");   
    
    ?> 
    </h1>
    
    <form action="Aula1/resposta.php" method="POST" class="form-label  ms-5 mt-5">
        <input type="text" name="valor" class="form-label">
        <button type="submit"  class="btn btn-dark">Enviar</button>
    </form>
</body>
</html>