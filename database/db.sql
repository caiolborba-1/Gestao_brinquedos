CREATE DATABASE Estoque_Itens;
use Estoque_Itens;

CREATE TABLE Itens(
    id  int auto_increment PRIMARY KEY,
    nome varchar(100) NOT NULL,
    Categoria enum('Legumes', 'Bebidas', 'Fruta', 'Carne', 'limpeza'),
    descricao varchar(100) NOT NULL,
    Quantidade_Item int NOT NULL,
    Validade DATE NOT NULL,
);