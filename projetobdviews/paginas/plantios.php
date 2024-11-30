<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';  
    require_once '../funcoes/plantios.php';
    
    $plantios = buscarPlantios();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Plantios</h2>
    <a href="novo_plantio.php" class="btn btn-success mb-3">Novo Plantio</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Moradores</th>
                <th>Terrenos</th>
                <th>Especies</th>
                <th>Estoque Mínimo</th>
                <th>Data de Inicio</th>
                <th>Data de Fim</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($plantios as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nome_morador'] ?></td>
                <td><?= $p['nome_terreno'] ?></td>
                <td><?= $p['nome_popular_especie'] ?></td>
                <td><?= $p['data_inicio'] ?></td>
                <td><?= $p['data_fim'] ?></td>
                <td>
                    <a href="editar_plantio.php?id=<?= $p['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_plantio.php?id=<?= $p['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
