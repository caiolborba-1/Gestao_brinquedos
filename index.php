<?php
include "infra/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $Categoria = $_POST["Categoria"];
    $Descrição = $_POST["Descrição"];
    $Valor = $_POST["Valor"];
    $Quantidade = $_POST["Quantidade"];
    $Validade = $_POST["Validade"];

    $sql = "INSERT INTO Itens 
    (name, Categoria, Descrição, Valor, Quantidade, Validade) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "sssdis",
        $name,
        $Categoria,
        $Descrição,
        $Valor,
        $Quantidade,
        $Validade
    );

    $stmt->close();
}

$Itens = $conexao->query("SELECT * FROM Itens");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Produtos</title>
</head>
<body>
    <h1>Cadastrar Item</h1>
        <form action="" method="POST">
            <label type="name">Nome:</label> <br>
                <input type="text" name="name" required>
                <br> <br>
            <label for="Categoria">Categoria</label>
                <select name="Categoria" required>
                    <option value="">Selecione</option>
                    <option value="Legumes">Legumes</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Fruta">Frutas</option>
                    <option value="Carne">Carnes</option>
                    <option value="limpeza">Produto de Limpeza</option>
                </select>
                <br> <br>
                Descrição: <br>
                <textarea name="Descrição"></textarea>
                <br>
                <label for="Valor">Valor</label> <br>
                    <input type="float" name="Valor" required>
                <br>
                <label for="Quantidade_Item">Quantidade:</label> <br>
                    <input type="number" name="Quantidade_Item" required>
                    <br>
                <label for="Validade_Item">Validade do Item</label> <br>
                    <input type="date" name="Validade_Item" required>
                <br> <br>
                <input type="submit" value="Cadastrar Item"> 
        </form>

<h2>Itens Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <Th>Categoria</Th>
                <th>Bebidas</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>