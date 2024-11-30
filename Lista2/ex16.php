<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 10</h1>
    <form action="exer10resp.php" method="POST" class="m-3">
        <div class="row">
            <div class="col">
                <label for="preco" class="form-label">Informe o preço: </label>
                <input type="number" name="preco" id="preco" class="form-control">
            </div>
            <div class="col">
                <label for="percentual" class="form-label">Informe o percentual: </label>
                <input type="number" name="percentual" id="percentual" class="form-control">
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