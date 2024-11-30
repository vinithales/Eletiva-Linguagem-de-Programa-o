<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/terrenos.php';

    $erro = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $area = floatval($_POST['area']);
            $localizacao = $_POST['localizacao'];


            
            if (CriarTerreno($nome, $area, $localizacao)){
                header('Location: terrenos.php');
                    exit();
            } else {
                    $erro = "Erro ao Cadastrar terreno!";
                }
            
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }

?>



<div class="container mt-5">
    <h2>Criar Novo Terreno</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger">$erro</p>
        <?= $erro ?> 

    <?php endif; ?>


    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" name="area" id="area" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização</label>
            <input type="text" name="localizacao" id="localizacao" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Terreno</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
