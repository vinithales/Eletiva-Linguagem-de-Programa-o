<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/moradores.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Moradores</h2>
    <a href="novo_morador.php" class="btn btn-success mb-3">Novo Morador</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            
            <?php

                $moradores = todosMoradores();
                foreach ($moradores as $m):
            ?>

            <tr>
                <td><?= $m['id']?></td>
                <td><?= $m['nome']?></td>
                <td><?= $m['email']?></td>
                <td><?= $m['telefone']?></td>
                <td><?php echo $m['nivel'] == 'adm' ? 'Administrador': 'Colaborador'; ?></td>
                <td>
                    <a href="editar_morador.php?id=<?= $m['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_morador.php?id=<?= $m['id']?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <?php    
                endforeach;
            ?>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
