<?php

require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = $_POST["email"];

    $stmt = $conn->prepare("INSERT INTO user (name, email) VALUES(?,?)");
    $stmt->bind_param("ss", $name, $email);
    $result = $stmt->execute();

    if ($result) {
        header("location: dash.php");
    }

    $stmt->close();
    $conn->close();
}

