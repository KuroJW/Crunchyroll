<?php
// Inclua o arquivo onde a classe Database está definida
require_once 'conexao.php';

// Crie uma instância da classe Database
$database = new Database();

// Tente obter a conexão com o banco de dados
$conn = $database->getConnection();

// Verifique se a conexão foi estabelecida
if ($conn) {
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} else {
    echo "Falha na conexão com o banco de dados.";
}
?>