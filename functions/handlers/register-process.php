<?php
include("../db/database.php");
if (isset($_POST["register"])) {
    $username = $conn->real_escape_string($_POST["username"]);
    $email = $conn->real_escape_string($_POST["email"]); 
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        header("Location: ../../index.php?error=user with same email/username exist");
        exit();
    } else {
        $insertQuery_user = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $insertQuery_game = "INSERT INTO game (username) VALUES ('$username')";

        if ($conn->query($insertQuery_user) === TRUE && $conn->query($insertQuery_game) === TRUE) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header("Location: ../../home.php?message=Account Created Successfully");
            exit();
        } else {
            header("Location: ../../index.php?error=registration_failed");
            exit();
        }
    }
}
