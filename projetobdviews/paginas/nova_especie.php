<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/especies.php';

    $erro = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            
            $nome_cientifico = $_POST['nome_cientifico'];
            $nome_popular = $_POST['nome_popular'];
            $descricao = $_POST['descricao'];


            
            if (cadastrarEspecie($nome_cientifico,$nome_popular, $descricao)){
                header('Location: especies.php');
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
    <h2>Cadastrar Nova Especie</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger">$erro</p>
        <?= $erro ?> 

    <?php endif; ?>


    <form method="post">
        <div class="mb-3">
            <label for="nome_cientifico" class="form-label">Nome Cientifico</label>
            <input type="text" name="nome_cientifico" id="nome_cientifico" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nome_popular" class="form-label">Nome Popular</label>
            <input type="text" name="nome_popular" id="nome_popular" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Especie</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
