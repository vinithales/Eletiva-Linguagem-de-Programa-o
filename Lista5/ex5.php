<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="container">
                <div class="row">
                    <label for="produto" class="form-label">Informe o titulo do livro e sua quantidade em estoque: </label>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="titulos[]" placeholder="Título <?= $i ?>">
                    </div>
                    <div class="col">
                        <input type="number" name="qtd[]" placeholder="Quantidade <?= $i ?>">
                    </div>
                </div>
            </div>
        <?php endfor ?>
        <div class="container">
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                try {
                    $titulos = $_POST['titulos'];
                    $qtd= $_POST['qtd'];
                    $livros = [];

                    for($i = 0; $i < count($titulos); $i++){
                        $livros[$titulos[$i]] = $qtd[$i];

                        if($qtd[$i] < 5){
                            echo "<p> Quantidade do livro {$titulos[$i]} Baixa</p>";
                        }
                    }
                    asort($livros);
                    foreach($livros as $titulo => $qtd){
                        echo "<p>Titulo: {$titulo}, Quantidade: {$qtd} </p>";
                    }


                } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
                }
            }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
