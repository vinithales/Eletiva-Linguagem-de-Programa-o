<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/plantios.php';  
    require_once '../funcoes/moradores.php';
    require_once '../funcoes/terrenos.php';
    require_once '../funcoes/especies.php';

    $moradores = todosMoradores(); 
    $terrenos = buscarTerrenos();    
    $especies = buscarEspecies();    
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $morador_id = intval($_POST['morador_id']);
            $terreno_id = intval($_POST['terreno_id']);
            $especie_id = intval($_POST['especie_id']);
            $data_inicio = $_POST['data_inicio'];
            $data_fim = $_POST['data_fim'] ?? null;

            if (empty($morador_id) || empty($terreno_id) || empty($especie_id) || empty($data_inicio)){
                $erro = "Informe todos os campos obrigatórios!";
            } else {
                if (criarPlantio($morador_id, $terreno_id, $especie_id, $data_inicio, $data_fim)){
                    header('Location: plantios.php');
                    exit();
                } else {
                    $erro = "Erro ao inserir o plantio!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Criar Novo Plantio</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="morador_id" class="form-label">Morador</label>
            <select name="morador_id" id="morador_id" class="form-select" required>
                <?php foreach($moradores as $m): ?>
                    <option value="<?= $m['id']?>"><?= $m['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="terreno_id" class="form-label">Terreno</label>
            <select name="terreno_id" id="terreno_id" class="form-select" required>
                <?php foreach($terrenos as $t): ?>
                    <option value="<?= $t['id']?>"><?= $t['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="especie_id" class="form-label">Espécie</label>
            <select name="especie_id" id="especie_id" class="form-select" required>
                <?php foreach($especies as $e): ?>
                    <option value="<?= $e['id']?>"><?= $e['nome_cientifico'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Criar Plantio</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
