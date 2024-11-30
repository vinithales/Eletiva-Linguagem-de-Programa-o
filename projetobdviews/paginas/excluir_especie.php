<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/especies.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if(excluirEspecie($id)){
                header('Location: especies.php');
                exit();

            } else{
                $erro = "Erro ao excluir especie";
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }else {
        if (isset($_GET['id'])){
            $id = intval($_GET['id']);
            $especie = buscarespeciePorId($id);
            if ($especie == null){
                header('Location: especies.php');
                exit();
            }
        } else {
            header('Location: especies.php');
            exit();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Especie</h2>
    
    <p>Tem certeza de que deseja excluir o especie?</p>
    <ul>
        <li><strong>Nome Cientifico:<?= $especie['nome_cientifico'] ?></strong> </li>
        <li><strong>Nome Popular:<?= $especie['nome_popular'] ?></strong> </li>
        <li><strong>Descrição:<?= $especie['descricao'] ?></strong></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $especie['id'] ?>">
        <button type="submit" name="confirmar" class="btn btn-danger" >Excluir</button>

        <a href="especies.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
