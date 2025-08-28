CREATE DATABASE triagem;
USE triagem;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    idade INT NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    sexo VARCHAR(10),
    data_nasc DATE, 
    telefone VARCHAR(20) NOT NULL,
    endereco VARCHAR(200) NOT NULL, 
    sintomas TEXT NOT NULL,
    inicio_sintomas DATE,
    doencas_exist VARCHAR(250),
    medicamentos VARCHAR(100),
    alergias VARCHAR(250),
    pressao VARCHAR(10),
    temp_corporal VARCHAR(10),
    freq_cardiaca VARCHAR(10),
    saturacao VARCHAR(10),
    observacoes VARCHAR(250),

);
