<?php

include "../infra/conexao.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM Itens WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
$resultado = $stmt->get_result();
    $item = mysqli_fetch_assoc($resultado);
    $stmt->close();

?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

        <label for="">Nome:</label>
        <br>
        <input type="text" name="name" value="<?php echo $item['name']; ?> required">
        <br> <br>
        <label for="">Categoria</label>
            <br>
        <select name="Categoria" required>
            <option value="Legumes" <?php if ($item['Categoria'] == 'Legumes') echo 'selected'; ?>>
                Legumes
            </option>

            <option value="Bebidas" <?php if ($item['Categoria'] == 'Bebidas') echo 'selected'; ?>>
                Bebidas
            </option>

            <option value="Fruta" <?php if ($item['Categoria'] == 'Fruta') echo 'selected'; ?>>
                Fruta
            </option>

            <option value="Carne" <?php if ($item['Categoria'] == 'Carne') echo 'selected'; ?>>
                Carne
            </option>

            <option value="limpeza" <?php if ($item['Categoria'] == 'limpeza') echo 'selected'; ?>>
                Limpeza
            </option>
        </select>
        <br> <br>

        <label for="">Descrição</label>
            <textarea name="Descricao" required <?php echo $item['Descricao']; ?>></textarea>
            <br> <br>

            <label >Quantidade</label>
                <br>
            <input type="number" name="Quantidade_Item" value="<?php echo $item['Quantidade_Item']; ?>" required>
            <br> <br>
             <label>Validade:</label>
        <br>

        <input type="date" name="Validade" value="<?php echo $item['Validade']; ?>" required>
            <br><br>
        <input type="submit" value="Atualizar">



    </form>

</body>
</html>