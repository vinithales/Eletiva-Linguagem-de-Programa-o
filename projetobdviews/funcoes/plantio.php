<?php

declare(strict_types=1);

require_once '../config/bancodedados.php';

function gerarDadosGrafico(): array
{
    global $pdo;
    $stmt = $pdo->query("SELECT 
                                p.id,
                                p.nome,
                                SUM(c.quantidade) as estoque 
                            FROM compra c
                            INNER JOIN produto p ON p.id = c.produto_id
                            GROUP BY p.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarPlantios(): array
{
    global $pdo;
    $stmt = $pdo->query("SELECT 
                p.id,
                p.data_inicio,
                p.data_fim,
                m.nome AS nome_morador,
                t.nome AS nome_terreno,
                e.nome_cientifico AS especie
            FROM plantio p
            INNER JOIN morador m ON p.morador_id = m.id
            INNER JOIN terreno t ON p.terreno_id = t.id
            INNER JOIN especie_planta e ON p.especie_id = e.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarPlantioPorId(int $id): ?array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT 
                p.*,
                m.nome AS nome_morador,
                t.nome AS nome_terreno,
                e.nome_cientifico AS especie
            FROM plantio p
            INNER JOIN morador m ON p.morador_id = m.id
            INNER JOIN terreno t ON p.terreno_id = t.id
            INNER JOIN especie_planta e ON p.especie_id = e.id
            WHERE p.id = ?");
    $stmt->execute([$id]);
    $plantio = $stmt->fetch(PDO::FETCH_ASSOC);
    return $plantio ?: null;
}


function criarPlantio(int $morador_id,int $terreno_id, int $especie_id, string $data_inicio, ?string $data_fim = null
): bool {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO plantio (morador_id, terreno_id, especie_id, data_inicio, data_fim) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$morador_id, $terreno_id, $especie_id, $data_inicio, $data_fim]);
}

function alterarPlantio(int $id, int $morador_id, int $terreno_id, int $especie_id, string $data_inicio, ?string $data_fim = null): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE plantio 
        SET morador_id = ?, terreno_id = ?, especie_id = ?, data_inicio = ?, data_fim = ? WHERE id = ?");
    return $stmt->execute([$morador_id, $terreno_id, $especie_id, $data_inicio, $data_fim, $id]);
}

function excluirPlantio(int $id): bool {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM plantio WHERE id = ?");
    return $stmt->execute([$id]);
}


