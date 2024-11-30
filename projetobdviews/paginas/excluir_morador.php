<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/moradores.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if (excluirMorador($id)){
                header('Location: moradores.php');
                exit();
            } else {
                $erro = "Erro ao excluir cadastro de morador!";
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    } else {
        if (isset($_GET['id'])){
            $id = intval($_GET['id']);
            $morador = buscarMoradorPorId($id);
            if ($morador == null){
                header('Location: moradores.php');
                exit();
            }
        } else {
            header('Location: moradores.php');
            exit();
        }
    }
    
?>

<div class="container mt-5">
    <h2>Excluir Cadastro de Moradores</h2>

    <p>Tem certeza de que deseja excluir o cadastro desse morador abaixo?</p>

    <ul>
        <li><strong>Nome: <?= $morador['nome'] ?></strong> </li>
        <li><strong>Email: <?= $morador['email'] ?></strong> </li>
        <li><strong>Telefone: <?= $morador['Telefone']?></strong></li>
        <li><strong>Nível: Colaborador</strong> </li>
    </ul>

    <form method="post">
        <input type="hidden" name="id" value="<?= $morador['id'] ?>" />
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="moradores.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
