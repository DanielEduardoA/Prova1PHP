create database agencia;

use agencia;

CREATE TABLE IF NOT EXISTS atendimentos ( id int AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, telefone VARCHAR(20) NOT NULL, atividade VARCHAR(255) NOT NULL, registro DATETIME NOT NULL, atendimento DATETIME, status VARCHAR(20) NOT NULL);