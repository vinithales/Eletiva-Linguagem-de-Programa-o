<?php

declare(strict_types = 1);


function buscarTerrenos(): array {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM terreno ORDER BY nome");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function buscarTerrenoPorId(int $id): ?array{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM terreno WHERE id = ?");
    $stmt->execute([$id]);

    $terreno = $stmt->fetch(PDO::FETCH_ASSOC);
    return $terreno ? $terreno : null;
}


function CriarTerreno(string $nome, string $area, string $localizacao) : bool {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO terreno (nome, area, localizacao) VALUES (?,?,?)");

    return $stmt->execute([$nome, $area, $localizacao]);
}

function alterarTerreno(int $id, string $nome, string $area, string $localizacao) : bool{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE terreno SET nome = ?, area = ?, localizacao = ? WHERE id =  ? ");
    return $stmt->execute([$nome, $area, $localizacao, $id]);
}


function excluirTerreno(int $id) : bool{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM terreno WHERE id = ?");
    return $stmt->execute([$id]);
}
