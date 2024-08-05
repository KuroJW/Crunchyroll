<?php
include ('conexao.php'); // Certifique-se de que 'conexao.php' cria a variável $pdo para conexão PDO

// Verifica se o formulário foi enviado
if (isset($_POST['LOGIN']) && isset($_POST['SENHA'])) {
    $login = $_POST['LOGIN'];
    $senha = $_POST['SENHA'];

    // Verifica se os campos não estão vazios
    if (strlen($login) == 0) {
        echo "Insira seu usuário";
    } else if (strlen($senha) == 0) {
        echo "Preencha sua senha";
    } else {
        // Cria uma instância da classe Database e obtém a conexão
        $database = new Database();
        $conn = $database->getConnection();

        // Preparar a consulta
        $stmt = $conn->prepare('SELECT * FROM usuario WHERE LOGIN = :LOGIN AND SENHA = :SENHA');

        // Associe os parâmetros
        $stmt->bindParam(':LOGIN', $login);
        $stmt->bindParam(':SENHA', $senha);

        // Execute a declaração
        $stmt->execute();

        // Verifique se o usuário foi encontrado
        if ($stmt->rowCount() > 0) {
            // Login bem-sucedido
            header('Location: https://www.youtube.com/watch?v=s-G9k-ZOsQ4');
            exit(); // Certifica-se de que o script para após o redirecionamento
        } else {
            echo "Usuário ou senha incorretos";
        }
    }
} else {
    echo "Dados do formulário não recebidos";
}
?>
