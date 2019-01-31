<?php

    $conn = new mysqli("localhost:3307", "root", "root", "dropdb");

    $nome = $_POST["nome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO users (id, nome, username, email, pass) VALUES (default, '$nome', '$username', '$email', '$pass')";

    if ($conn->query($sql) === true) {
        sleep(4);
        header("Location: ../../index.php");
    } else {
        echo "error " . $conn->error;
    }
?>