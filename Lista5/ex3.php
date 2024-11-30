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
                    <label for="produto" class="form-label">Informe o código, nome e preço do produto: </label>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="number" name="codigos[]" placeholder="Código <?= $i ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome <?= $i ?>">
                    </div>
                    <div class="col">
                        <input type="number" name="precos[]" placeholder="Preço <?= $i ?>">
                    </div>
                </div>
            </div>
        <?php endfor ?>
        <div class="container mt-3">
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                try {
                    $codigos = $_POST['codigos'];
                    $nomes = $_POST['nomes'];
                    $precos = $_POST['precos'];

                    $produtos = [];

           
                    for ($i = 0; $i < count($codigos); $i++) {
                        $produtos[$codigos[$i]] = [
                            'nome' => $nomes[$i],
                            'preco' => $precos[$i]
                        ];
                    }

               
                    foreach ($produtos as $codigo => $produto) {
                        if ($produto['preco'] > 100) {
                            $produto['preco'] -= 0.1 * $produto['preco'];
                        }
                    }

    
            
                    foreach ($produtos as $codigo => $produto) {
                        echo "<p>Código: {$codigo}, Nome: {$produto['nome']}, Preço: R$ {$produto['preco']} . </p>";
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
