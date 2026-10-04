<?php

include "infra/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $Categoria = $_POST["Categoria"];
    $Descricao = $_POST["Descricao"];
    $Quantidade_Item = $_POST["Quantidade_Item"];
    $Validade = $_POST["Validade"];

    $sql = "INSERT INTO Itens 
            (name, Categoria, Descricao, Quantidade_Item, Validade)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param(
        "sssis",
        $name,
        $Categoria,
        $Descricao,
        $Quantidade_Item,
        $Validade
    );

    $stmt->execute();

    $stmt->close();
}

$Itens = $conexao->query("SELECT * FROM Itens");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Estoque de Itens</title>

</head>

<body>

    <h1>Cadastrar Item</h1>

    <form method="POST">

        <label>Nome:</label>
        <br>

        <input type="text" name="name" required>

        <br><br>


        <label>Categoria:</label>
        <br>

        <select name="Categoria" required>

            <option value="">Selecione</option>

            <option value="Legumes">Legumes</option>

            <option value="Bebidas">Bebidas</option>

            <option value="Fruta">Fruta</option>

            <option value="Carne">Carne</option>

            <option value="limpeza">Limpeza</option>

        </select>

        <br><br>


        <label>Descrição:</label>
        <br>

        <textarea name="Descricao" required></textarea>

        <br><br>


        <label>Quantidade:</label>
        <br>

        <input 
            type="number" 
            name="Quantidade_Item" 
            required
        >

        <br><br>


        <label>Validade:</label>
        <br>

        <input 
            type="date" 
            name="Validade" 
            required
        >

        <br><br>


        <input 
            type="submit" 
            value="Cadastrar Item"
        >

    </form>


    <h2>Itens Cadastrados</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Nome</th>

            <th>Categoria</th>

            <th>Descrição</th>

            <th>Quantidade</th>

            <th>Validade</th>

        </tr>


        <?php while ($item = mysqli_fetch_assoc($Itens)) { ?>

            <tr>

                <td>
                    <?php echo $item["id"]; ?>
                </td>

                <td>
                    <?php echo $item["name"]; ?>
                </td>

                <td>
                    <?php echo $item["Categoria"]; ?>
                </td>

                <td>
                    <?php echo $item["Descricao"]; ?>
                </td>

                <td>
                    <?php echo $item["Quantidade_Item"]; ?>
                </td>

                <td>
                    <?php echo $item["Validade"]; ?>
                </td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>