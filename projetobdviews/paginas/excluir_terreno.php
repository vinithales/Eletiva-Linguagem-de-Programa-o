<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/terrenos.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if(excluirTerreno($id)){
                header('Location: terrenos.php');
                exit();

            } else{
                $erro = "Erro ao excluir terreno";
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }else {
        if (isset($_GET['id'])){
            $id = intval($_GET['id']);
            $terreno = buscarTerrenoPorId($id);
            if ($terreno == null){
                header('Location: terrenos.php');
                exit();
            }
        } else {
            header('Location: terrenos.php');
            exit();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Categoria</h2>
    
    <p>Tem certeza de que deseja excluir o Terreno?</p>
    <ul>
        <li><strong>Nome:<?= $terreno['nome'] ?></strong> </li>
        <li><strong>Area:<?= $terreno['area'] ?></strong> </li>
        <li><strong>localizacao:<?= $terreno['localizacao'] ?></strong></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $terreno['id'] ?>">
        <button type="submit" name="confirmar" class="btn btn-danger" >Excluir</button>

        <a href="categorias.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
