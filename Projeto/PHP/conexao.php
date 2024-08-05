<?php
class Database {
    private $host = 'localhost'; // ou o endereço do seu servidor de banco de dados
    private $db_name = 'dbwadley';
    private $username = 'root';
    private $password = '';
    private $conn;

    // Método para obter a conexão com o banco de dados
    public function getConnection() {
        $this->conn = null;

        try {
            // Configura a conexão usando PDO
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );

            // Define o modo de erro do PDO para exceções
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            // Caso haja um erro, exibe a mensagem
            echo "Erro ao conectar: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
