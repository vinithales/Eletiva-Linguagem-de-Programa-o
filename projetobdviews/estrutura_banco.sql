CREATE TABLE terreno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    area DECIMAL(10, 2) NOT NULL,
    localizacao TEXT NOT NULL
);

CREATE TABLE morador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(15)
);

CREATE TABLE especie_planta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cientifico VARCHAR(100) NOT NULL,
    nome_popular VARCHAR(100),
    descricao TEXT
);

CREATE TABLE plantio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    morador_id INT NOT NULL,
    terreno_id INT NOT NULL,
    especie_id INT NOT NULL,
    data_inicio DATE NOT NULL,
    data_fim DATE,
    FOREIGN KEY (morador_id) REFERENCES morador(id),
    FOREIGN KEY (terreno_id) REFERENCES terreno(id),
    FOREIGN KEY (especie_id) REFERENCES especie_planta(id)
);