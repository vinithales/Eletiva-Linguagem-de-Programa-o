
<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/especies.php';

    $id = $_GET['id'];
    if(!$id){
        header('Location: especies.php');
        exit();
    }

    $especie = buscarEspeciePorId($id);
    if(!$especie){
        header('Location: especies.php');
        exit();
    }


    $erro = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome_cientifico = $_POST['nome_cientifico'];
            $nome_popular = $_POST['nome_popular'];
            $descricao = $_POST['descricao'];
            
            if(empty($nome_cientifico) || empty($nome_popular) || empty($descricao)){
                $erro = "Preencha os campos obrigatórios!";
            } else{
                if(alterarEspecie($id, $nome_cientifico, $nome_popular, $descricao)){
                    header('Location: especies.php');
                            exit();
                } else{
                    $erro = "Erro ao alterar o produto!";
                    
                }
            }


        }catch(Exception $e){
            $erro = "Erro: ".$e->getMessage(); 
        }
    }else{

    }
?>

<div class="container mt-5">
    <?php if(!empty($erro)):?>
            <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>
    <h2>Editar Especie</h2>

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
        <button type="submit" class="btn btn-primary">Atualizar Especie</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
