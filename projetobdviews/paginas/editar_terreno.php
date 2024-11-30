
<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/terrenos.php';

    $id = $_GET['id'];
    if(!$id){
        header('Location: terrenos.php');
        exit();
    }

    $terreno = buscarTerrenoPorId($id);
    if(!$terreno){
        header('Location: terrenos.php');
        exit();
    }


    $erro = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome = $_POST['nome'];
            $area = floatval($_POST['area']);
            $localizacao = $_POST['localizacao'];
            
            if(empty($nome) || empty($area) || empty($localizacao)){
                $erro = "Preencha os campos obrigatórios!";
            } else{
                if(alterarTerreno($id, $nome, $area, $localizacao)){
                    header('Location: terrenos.php');
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
    <h2>Editar Terreno</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" name="area" id="area" class="form-control">
        </div>
        <div class="mb-3">
            <label for="localizacao" class="form-label">Localização</label>
            <input type="text" name="localizacao" id="localizacao" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Terreno</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
