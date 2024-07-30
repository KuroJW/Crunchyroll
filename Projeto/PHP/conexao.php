<?php
// Defina as variáveis para a conexão
$host = 'localhost'; // ou o endereço do servidor do banco de dados
$usuario = 'root';
$senha = '';
$database = 'dbwadley';

// Cria uma nova conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se a conexão foi bem-sucedida
if ($mysqli->connect_errno) {
    echo "Falha na conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado com sucesso ao banco de dados.";
}

// Fecha a conexão quando terminar
$mysqli->close();
?>
