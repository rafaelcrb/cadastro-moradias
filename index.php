<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Moradias</title>
</head>
<body>
    <h1>Cadastro de Morador</h1>

    <?php
        include 'conexao.php';
        $conexao = conectarDB();

        $stmt = $conexao->query("SELECT * FROM moradias");

        while($row = $stmt->fetch()) { ?>
            <ul>
                <li>
                    <?= $row['nome'] ?> - 
                    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    <a href="processar_exclusao.php?id=<?= $row['id']?>">Excluir</a>
                </li>
            </ul>
            <?php } ?>
            <a href="cadastrar.php">Cadastrar Morador</a>

</body>
</html>