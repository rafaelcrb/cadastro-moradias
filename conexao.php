<?php
    function conectarDB() {
        $host = 'localhost';
        $dbname = 'cesmac';
        $usuario = 'rafael';
        $senha = 'rafael123';

        try {
            $conexao = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
            return $conexao;
        } catch(PDOException $e) {
            echo "Erro ao conectar!" . $e->getMessage();
        }
    }



?>