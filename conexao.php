<?php
include("processar_cadastro.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if($conn->query($sql) === TRUE){
    echo "Cadastro criado com sucesso!";
} else{
    echo "EROUUUU". $sql . "<br>"  $conn->error;
}
$conn->close();

?>