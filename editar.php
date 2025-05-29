<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição Cadastro</title>
</head>
<body>
    <?php
        include 'conexao.php';
        $conexao = conectarDB();
        $id = $_GET['id'];

        $stmt = $conexao->prepare("SELECT * FROM moradias WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $cadastro = $stmt->fetch();
    ?>
    <h1>Editar Cadstro</h1>
    <form action="processar_edicao.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        Nome: <input type="text" name="nome" id="nome" value="<?= $cadastro['nome'] ?>">
        Telefone: <input type="text" name="telefone" id="telefone" value="<?= $cadastro['telefone'] ?>">
        Idade: <input type="Number" name="idade" id="idade" value="<?= $cadastro['idade'] ?>">
        Local: <input type="text" name="local" id="local" value="<?= $cadastro['local'] ?>">
        <input type="submit" value="Editar">
    </form>
</body>
</html>