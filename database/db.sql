CREATE DATABASE Estoque_Itens;
use Estoque_Itens;

CREATE TABLE Itens(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    Categoria ENUM('Legumes', 'Bebidas', 'Fruta', 'Carne', 'limpeza'),
    Descricao VARCHAR(100) NOT NULL,
    Quantidade_Item INT NOT NULL,
    Validade DATE NOT NULL
);
