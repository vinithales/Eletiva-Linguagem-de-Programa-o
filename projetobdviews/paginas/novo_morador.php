<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/moradores.php';

    $erro = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nivel = 'colab';
            $telefone = $_POST['telefone'];

            if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
                $erro = "Todos os campos são obrigatórios!";
            } else {
                if (novoMorador($nome, $email, $senha, $nivel, $telefone)){
                    header('Location: moradores.php');
                    exit();
                } else {
                    $erro = "Erro ao Cadastrar Morador!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Criar Novo Morador</h2>

    <?php if (!empty($erro)): ?>

        <p class="text-danger">$erro</p>
        <?= $erro ?> 

    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="number"  min="9" max="11" name="telefone" id="telefone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Morador</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
