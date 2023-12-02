<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido
    $_SESSION['logged_in'] = true;
    echo "Login bem-sucedido! - AQUI VAI VIR O NOSSO SITE QUANDO TIVER PRONTO SRSRSRSRRSSRRS";
} else {
    // Credenciais inválidas
    echo "Credenciais inválidas. Tente novamente.";
}

$conn->close();
?>
