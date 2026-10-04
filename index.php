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
            <label for="Item">Tipo de Item </label>
                <select name="Item" required>
                    <option value="">Selecione</option>
                    <option value="Alimento">Alimentos</option>
                    <option value="Refrigerante">Refrigerante</option>
                    <option value="Fruta">Frutas</option>
                    <option value="Carne">Carnes</option>
                </select>
                <br> <br>
                Descrição: <br>
                <textarea name="Descrição"></textarea>
                <br>
                <label for="Valor">Valor</label> <br>
                    <input type="float" name="Valor" required>
                <br>
                <label for="Quantidade_Item">Quantidade do Item:</label> <br>
                    <input type="number" name="Quantidade_Item" required>
                    <br>
                <label for="Validade_Item">Validade do Item</label> <br>
                    <input type="date" name="Validade_Item" required>
                <br> <br>
                <input type="submit" value="Cadastrar Item"> 

        </form>
</body>
</html>