<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Exercicio 5</h1>
    <form action="exer5resp.php" method="POST" class="m-3">
        <div class="row">
            <div class="col">
                <label for="nota1" class="form-label">Informe a primeira Nota: </label>
                <input type="number" name="nota1" id="nota1" class="form-control">
            </div>
            <div class="col">
                <label for="nota2" class="form-label">Informe a Segunda Nota: </label>
                <input type="number" name="nota2" id="nota2" class="form-control">
            </div>
            <div class="col"> 
                <label for="nota3" class="form-label">Informe a Terceira Nota: </label>
                <input type="number" name="nota3" id="nota3" class="form-control">
            </div>

        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-dark mt-2">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</body>
</html>