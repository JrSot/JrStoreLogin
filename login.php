<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Receber os dados do formulário
$usernameInput = $_POST["username"];
$passwordInput = $_POST["password"];

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para verificar as credenciais do usuário
$sql = "SELECT * FROM usuarios WHERE username = '$usernameInput' AND password = '$passwordInput'";
$result = $conn->query($sql);

// Verificar se o usuário foi encontrado no banco
