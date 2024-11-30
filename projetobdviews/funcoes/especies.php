<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function buscarEspecies(): array{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM especie_planta ORDER BY id");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarEspeciePorId(int $id) : ?array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM especie_planta WHERE id = ?");

    $stmt->execute([$id]);
    $especie = $stmt->fetch(PDO::FETCH_ASSOC);
    return $especie ? $especie : null;
}

function cadastrarEspecie(string $nome_cientifico, string $nome_popular, string $descricao) : bool{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO especie_planta (nome_cientifico, nome_popular, descricao) VALUES (?,?,?)");
    return $stmt->execute([$nome_cientifico, $nome_popular, $descricao]);

}


function alterarEspecie(int $id, string $nome_cientifico, string $nome_popular, string $descricao) : bool{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE especie_planta SET nome_cientifico = ?, nome_popular = ?, descricao = ? WHERE id = ?");

    return $stmt->execute([$nome_cientifico, $nome_popular, $descricao, $id]);
}

function excluirEspecie(int $id) : bool{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM especie_planta WHERE id = ?");

    return $stmt->execute([$id]);
}