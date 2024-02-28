CREATE DATABASE siteclientes;

USE siteclientes;

CREATE TABLE formulariocadastro(
nomecompleto VARCHAR(100) NOT NULL, 
email VARCHAR(50) UNIQUE NOT NULL, 
senha VARCHAR(30) NOT NULL, 
telefone INT(11) NOT NULL, 
genero VARCHAR(20) NOT NULL, 
data_nascimento DATE,
endereco VARCHAR(100) NOT NULL, 
cidade VARCHAR(50) NOT NULL, 
estado VARCHAR(50) NOT NULL
);
