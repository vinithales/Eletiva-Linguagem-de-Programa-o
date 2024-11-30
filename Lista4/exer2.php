<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <form action="exer2resp.php" method="POST">
            <div clas="row">
                <div class="col">
                    <label for="palavra" class="form-label">Informe uma palavra: </label>
                    <input type="text" name="palavra" id="palavra" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-success">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </main>

</body>
</html>