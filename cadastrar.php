<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Moradia</title>
</head>
<body>
    <h1>Cadastrar Morador</h1>
    <form action="processar_cadastro.php" method="POST">
        
    <label for="nome">Nome do Morador:</label>
        <input type="text" name="nome" required><br>

        <label for="telefone">Telefone para Contato:</label>
        <input type="text" name="telefone"><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade"><br>

        <label for="local">Local:</label>
        <input type="text" name="local" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
