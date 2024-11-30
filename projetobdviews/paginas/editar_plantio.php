<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/plantios.php';
    require_once '../funcoes/moradores.php';
    require_once '../funcoes/terrenos.php';
    require_once '../funcoes/especies.php';

    // Recupera o ID do plantio a ser editado
    $id = $_GET['id'];
    if (!$id){
        header('Location: plantios.php');
        exit();
    }

    // Busca os dados do plantio pelo ID
    $plantio = buscarPlantioPorId($id);
    if (!$plantio){
        header('Location: plantios.php');
        exit();
    }

    // Carrega as opções de moradores, terrenos e espécies
    $moradores = todosMoradores(); 
    $terrenos = buscarTerrenos();    
    $especies = buscarEspecies();    

    $erro = "";

    // Se o formulário for enviado, tenta atualizar o plantio
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $morador_id = intval($_POST['morador_id']);
            $terreno_id = intval($_POST['terreno_id']);
            $especie_id = intval($_POST['especie_id']);
            $data_inicio = $_POST['data_inicio'];
            $data_fim = $_POST['data_fim'] ?? null;
            $id = intval($_POST['id']);

            if (empty($morador_id) || empty($terreno_id) || empty($especie_id) || empty($data_inicio)){
                $erro = "Preencha todos os campos obrigatórios!";
            } else {
                if (alterarPlantio($id, $morador_id, $terreno_id, $especie_id, $data_inicio, $data_fim)){
                    header('Location: plantios.php');
                    exit();
                } else {
                    $erro = "Erro ao alterar o plantio!";
                }
            }

        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Plantio</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" />
        
        <div class="mb-3">
            <label for="morador_id" class="form-label">Morador</label>
            <select name="morador_id" id="morador_id" class="form-select" required>
                <?php foreach($moradores as $m): ?>
                    <option value="<?= $m['id'] ?>" 
                    <?= $m['id'] == $plantio['morador_id'] ? 'selected' : '' ?>>
                        <?= $m['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="terreno_id" class="form-label">Terreno</label>
            <select name="terreno_id" id="terreno_id" class="form-select" required>
                <?php foreach($terrenos as $t): ?>
                    <option value="<?= $t['id'] ?>" 
                    <?= $t['id'] == $plantio['terreno_id'] ? 'selected' : '' ?>>
                        <?= $t['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="especie_id" class="form-label">Espécie</label>
            <select name="especie_id" id="especie_id" class="form-select" required>
                <?php foreach($especies as $e): ?>
                    <option value="<?= $e['id'] ?>" 
                    <?= $e['id'] == $plantio['especie_id'] ? 'selected' : '' ?>>
                        <?= $e['nome_popular'] ?> (<?= $e['nome_cientifico'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" 
            value="<?= $plantio['data_inicio'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control" 
            value="<?= $plantio['data_fim'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Plantio</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
