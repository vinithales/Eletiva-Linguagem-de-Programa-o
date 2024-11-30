<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/moradores.php';


    $id = $_GET['id'];
    if (!$id){
        header('Location: moradores.php');
        exit();
    }

    $produto = buscarMoradorPorId($id);
    if (!$produto){
        header('Location: moradores.php');
        exit();
    }


    $erro = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $telefone = intval($_POST['telefone']);
            if(empty($nome) || empty($senha) || empty($email) || empty($telefone)){
                $erro = "Preencha os campos obrigatórios!";
            } else{
                if(alterarMorador($id, $nome, $email, $senha, $telefone)){
                    header('Location: moradores.php');
                            exit();
                } else{
                    $erro = "Erro ao alterar o produto!";
                    
                }
            }


        }catch(Exception $e){
            $erro = "Erro: ".$e->getMessage(); 
        }
    }else{

    }

?>

<div class="container mt-5">
    <?php if(!empty($erro)):?>
            <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <h2>Editar Morador</h2>
    <form method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?= htmlspecialchars($produto['nome']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($produto['email']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Nova Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="number" name="telefone" id="telefone" class="form-control" value="<?= htmlspecialchars($produto['telefone']); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar dados</button>
</form>
</div>

<?php require_once 'rodape.php'; ?>
