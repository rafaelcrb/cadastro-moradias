<?php
    include 'conexao.php';
    $conexao = conectarDB();

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST["telefone"];
    $idade = $_POST["idade"];
    $local = $_POST["local"];

    $stmt = $conexao->prepare("UPDATE moradias SET nome=:nome, telefone=:telefone, idade=:idade, local=:local WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':local', $local);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: index.php");

?>