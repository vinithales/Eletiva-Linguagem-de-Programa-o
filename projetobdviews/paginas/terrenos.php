<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';   
    require_once '../funcoes/terrenos.php'; 
?>

<div class="container mt-5">
    <h2>Gerenciamento de Terrenos</h2>
    <a href="novo_terreno.php" class="btn btn-success mb-3">Novo Terreno</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Area</th>
                <th>Localização</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $terrenos = buscarTerrenos();
                foreach($terrenos as $t): 
            
            ?>

            <tr>
                <td><?= $t['id']?></td>
                <td><?= $t['nome']?></td>
                <td><?= $t['area']?></td>
                <td><?= $t['localizacao']?><td>
                <td>
                    <a href="editar_terreno.php?id=<?= $t['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_categoria.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php    
                endforeach;
            ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
