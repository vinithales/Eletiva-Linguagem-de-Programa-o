<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="resposta1.php" method="POST" class="m-3">
        <?php 
            for($i = 1; $i <= 7; $i++)
            {
            ?>
            <input type="number" name="valor<?= $i?>" class="form-control mt-2">
            <?php

                }
            ?>
        <button type="submit" class="btn btn-success mt-2"> Enviar</button>
    </form>
</body>
</html>