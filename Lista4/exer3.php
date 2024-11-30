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
        <form action="exer3resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="palavra1" class="form-label">Informe a primeira palavra: </label>
                    <input type="text" name="palavra1" id="palavra1" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="palavra2"  class="form-label">Informe a segunda palavra: </label>
                    <input type="text" name="palavra2" id="palavra2" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-darker">
                        enviar
                    </button>
                </div>
        </form>
    </main>
</body>
</html>