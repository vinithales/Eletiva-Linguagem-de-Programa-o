<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 14</h1>
    <form action="exer14resp.php" method="POST" class="m-3">
        <div class="row">
            <div class="col">
                <label for="km" class="form-label">Digite um valor em quilômetros: </label>
                <input type="number" name="km" id="km" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger mt-3">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</body>
</html>