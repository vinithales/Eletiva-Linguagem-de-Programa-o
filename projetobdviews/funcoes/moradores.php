<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha){
    global $pdo;
    
    //Inserção do morador adm
    $stmt  = $pdo->query("SELECT * FROM morador WHERE email = 'adm@adm.com'");
    $morador = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    //verifica se o morador não existe, se não existir, vamos criar
    if (!$morador){
        novoMorador('Administrador', 'adm@adm.com', 'adm', 'adm', 11111111111);
    }

    //Verificar email e senha do morador
    $stmt  = $pdo->prepare("SELECT * FROM morador WHERE email = ?");
        //validar os valores com EXPRESSÕES REGULARES - validar se é um email
    $stmt->execute([$email]);
    
    $morador = $stmt->fetch(PDO::FETCH_ASSOC);
    if($morador){
        
        return $morador;
    } else {
        return null;
    }
}

function novoMorador(string $nome, string $email, string $senha, string $nivel, int $telefone):bool{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stmt  = $pdo->prepare("INSERT INTO morador (nome, email, senha, nivel, telefone) VALUES (?, ?, ?, ?, ?)");
    return $stmt ->execute([$nome, $email, $senha_criptografada, $nivel, $telefone]);
}

function alterarMorador(int $id, string $nome, string $email, string $senha, int $telefone ): bool{
    global $pdo;
    if (empty($senha)) {
        $stmt = $pdo->prepare("UPDATE morador SET nome = ?, email = ?, telefone = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $telefone, $id]);
    } else {
        $stmt = $pdo->prepare("UPDATE morador SET nome = ?, email = ?, senha = ?, telefone = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $senha, $telefone, $id]);
    }

    return $stmt->execute([$nome, $email, $senha, $telefone, $id]);
}

function excluirMorador(int $id):bool{
    global $pdo;
    $stmt  = $pdo->prepare("DELETE FROM morador WHERE id = ?");
    return $stmt ->execute([$id]);
}

function todosMoradores(): array{
    global $pdo;
    $stmt  = $pdo->query(" SELECT * FROM morador WHERE nivel <> 'adm' ");
    return $stmt ->fetchAll(PDO::FETCH_ASSOC);
}

function buscarMoradorPorId(int $id): ?array{
    global $pdo;
    $stmt  = $pdo->prepare("SELECT * FROM morador WHERE id = ? AND nivel <> 'adm'");
    $stmt ->execute([$id]);
    $morador = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $morador ? $morador : null;
}