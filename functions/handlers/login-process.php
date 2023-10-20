<?php
include("../db/database.php");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        header("Location: ../../home.php?message=Account Created Successfully");
        exit();
    } else {
        header("Location: ../../index.php?error=login failed");       
         exit();
    }
}
?>
