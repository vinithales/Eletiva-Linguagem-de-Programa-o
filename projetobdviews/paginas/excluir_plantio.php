<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/plantios.php';

    // Recupera o ID do plantio a ser excluído
    $id = $_GET['id'];
    if (!$id) {
        header('Location: plantios.php');
        exit();
    }

    // Busca os dados do plantio pelo ID
    $plantio = buscarPlantioPorId($id);
    if (!$plantio) {
        header('Location: plantios.php');
        exit();
    }

    $erro = "";

    // Verifica se o formulário foi enviado para confirmar a exclusão
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $id = intval($_POST['id']);
            if (empty($id)) {
                header('Location: plantios.php');
                exit();
            } else {
                // Tenta excluir o plantio
                if (excluirPlantio($id)) {
                    header('Location: plantios.php');
                    exit();
                } else {
                    $erro = "Erro ao excluir o plantio!";
                }
            }
        } catch (Exception $e) {
            $erro = "Erro: " . $e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Excluir Plantio</h2>
    
    <p>Tem certeza de que deseja excluir o plantio abaixo?</p>
    <ul>
        <li><strong>ID do Plantio:</strong> <?= $plantio['id'] ?></li>
        <li><strong>Morador:</strong> <?= $plantio['nome_morador'] ?></li>
        <li><strong>Terreno:</strong> <?= $plantio['nome_terreno'] ?></li>
        <li><strong>Data de Início:</strong> <?= $plantio['data_inicio'] ?></li>
        <li><strong>Data de Fim:</strong> <?= $plantio['data_fim'] ? $plantio['data_fim'] : 'Não definida' ?></li>
    </ul>

    <!-- Formulário de confirmação -->
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" >
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="plantios.php" class="btn btn-secondary">Cancelar</a>
    </form>

    <?php if(!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

</div>

<?php require_once 'rodape.php'; ?>
