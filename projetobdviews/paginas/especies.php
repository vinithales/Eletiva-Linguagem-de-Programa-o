<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';   
    require_once '../funcoes/especies.php'; 
?>

<div class="container mt-5">
    <h2>Gerenciamento de Especies</h2>
    <a href="nova_especie.php" class="btn btn-success mb-3">Nova Especie</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Científico</th>
                <th>Nome Popular</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $especies = buscarEspecies();
                foreach($especies as $e): 
            
            ?>

            <tr>
                <td><?= $e['id']?></td>
                <td><?= $e['nome_cientifico']?></td>
                <td><?= $e['nome_popular']?></td>
                <td><?= $e['descricao']?><td>
                <td>
                    <a href="editar_especie.php?id=<?= $e['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_especie.php?id=<?= $e['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php    
                endforeach;
            ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
