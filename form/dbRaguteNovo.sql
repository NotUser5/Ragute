CREATE DATABASE RAGUTE;

USE RAGUTE;

CREATE TABLE USUARIOS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    LOGIN VARCHAR(30) NOT NULL,
    SENHA VARCHAR(30) NOT NULL
);

INSERT INTO USUARIOS VALUES (NULL, 'admi', 'rag@2022');

CREATE TABLE PRODUTOS(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    DESCRICAO VARCHAR(30) NOT NULL,
    VALOR FLOAT(10,2) NOT NULL,
    INGREDIENTES VARCHAR(255),
    ATIVO BOOLEAN NOT NULL,
    IMG VARCHAR(255),
    ID_CATEGORIA INT
);

CREATE TABLE INGREDIENTES(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    INGREDIENTE VARCHAR(30)
);

CREATE TABLE CONTEM(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_PRODUTOS INT NOT NULL,
    ID_INGREDIENTES INT NOT NULL
);

CREATE TABLE CATEGORIA(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(30)
);

ALTER TABLE PRODUTOS ADD CONSTRAINT FK_PRODUTOS_CATEGORIA
FOREIGN KEY (ID_CATEGORIA) REFERENCES CATEGORIA(ID);

ALTER TABLE CONTEM ADD CONSTRAINT FK_CONTEM_PRODUTOS
FOREIGN KEY (ID_PRODUTOS) REFERENCES PRODUTOS(ID);

ALTER TABLE CONTEM ADD CONSTRAINT FK_CONTEM_INGREDIENTES
FOREIGN KEY (ID_INGREDIENTES) REFERENCES INGREDIENTES(ID);

INSERT INTO CATEGORIA VALUES (NULL, 'Hamburguer');
INSERT INTO CATEGORIA VALUES (NULL, 'Artesanais');
INSERT INTO CATEGORIA VALUES (NULL, 'Frango');
INSERT INTO CATEGORIA VALUES (NULL, 'Hot-Dogs');
INSERT INTO CATEGORIA VALUES (NULL, 'Porções Quentes');
INSERT INTO CATEGORIA VALUES (NULL, 'Porções Frias');
INSERT INTO CATEGORIA VALUES (NULL, 'Não Alcoólicas');
INSERT INTO CATEGORIA VALUES (NULL, 'Alcoólicas');