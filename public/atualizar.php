<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$name = $_POST["name"];
$Categoria = $_POST["Categoria"];
$Descricao = $_POST["Descricao"];
$Quantidade_Item = $_POST["Quantidade_Item"];
$Validade = $_POST["Validade"];

$sql = "UPDATE Itens
        SET name = ?,
            Categoria = ?,
            Descricao = ?,
            Quantidade_Item = ?,
            Validade = ?
        WHERE id = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("sssisi", $name, $Categoria, $Descricao, $Quantidade_Item, $Validade, $id);
$stmt->execute();
$stmt->close();

header("Location: ../index.php");

?>