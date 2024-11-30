<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i=1; $i <= 5 ; $i++):?>
            <div class="container">
                <div class="row">
                    <label for="palavra" class="form-label">Informe o nome e as 3 notas <?= $i ?> </label>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome <?= $i ?>"/>
                    </div>
                    <div class="col">
                        <input type="number" name="nota1[]" placeholder="P1 <?= $i ?>"/>
                    </div>
                    <div class="col">
                        <input type="number" name="nota2[]" placeholder="P2 <?= $i ?>"/>
                    </div>
                    <div class="col">
                        <input type="number" name="nota3[]" placeholder="P3 <?= $i ?>"/>
                    </div>
                </div>
            </div>
        <?php endfor ?>
        <div class="container">
            <button type="submit" class="btn">
                Enviar
            </button>
        </div>

        <?php
            if($_SERVER['REQUEST_METHOD'] ==  "POST"){
                try {
                    $nomes = $_POST['nomes'];
                    $notas1 = $_POST['nota1'];
                    $notas2 = $_POST['nota2'];
                    $notas3 = $_POST['nota3'];
                    $nomesMedias = [];

                    for($i = 0; $i < count($nomes); $i++){
                        $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
                        $nomesMedias[$nomes[$i]] = $media;
                    }

                        arsort($nomesMedias);

                    foreach ($nomesMedias as $nome => $media) {
                        echo "<p>Nome: {$nome} Média: {$media}</p>";
                    }

                } catch (Exception $e) {
                    echo "Erro: " .$e->getMessage();
                }
            }
        ?>
    </form>
</body>
</html>