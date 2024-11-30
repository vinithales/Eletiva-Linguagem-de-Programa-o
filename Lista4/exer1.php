<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
    <form action="exer1resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="palavra" class="form-label">
                    Digite uma palavra:
                </label>
                <input type="text" class="form-control" name="palavra" id="palavra">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit"class="btn btn-primary">
                    Enviar
                </button>
            </div>
        </div>
    </form>
    </main>
</body>
</html>