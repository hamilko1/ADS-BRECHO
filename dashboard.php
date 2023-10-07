<!DOCTYPE html>
<meta charset="UTF-8"/>
<html>
<head>
    <title>Nostalgie</title>
</head>
<body>
    <h2>Dashboard</h2>
    <?php
    session_start();
    if (isset($_SESSION["user_id"])) {
        echo "Bem-vindo a Nostalgie " . $_SESSION["username"];

        echo "<br><a href='logout.php'>Sair</a>";
    } else {
        header("Location: login.html"); 
        exit();
    }
    ?>
</body>
</html>