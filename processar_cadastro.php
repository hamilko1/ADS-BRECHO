<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";


if ($conn->query($sql) === TRUE) {
    echo "Cadastro criado com sucesso!- AQUI VAI VIR O NOSSO SITE QUANDO TIVER PRONTO SRSRSRSRRSSRRS";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}


$conn->close();
?>