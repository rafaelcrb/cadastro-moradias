<?php
      include 'conexao.php';
      $conexao = conectarDB();
  
      $nome = $_POST['nome'];
      $telefone = $_POST["telefone"];
      $idade = $_POST["idade"];
      $local = $_POST["local"];
  
      $stmt = $conexao->prepare("INSERT INTO moradias (nome, telefone, idade, local) VALUES (:nome, :telefone, :idade, :local)");
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':idade', $idade);
      $stmt->bindParam(':local', $local);
      $stmt->execute();
  
      header("Location: index.php");  

?>