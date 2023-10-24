<?php
include("../../conponents/head-home.php"); // Correct the file name
include("../db/database.php");
include("../check/login-check.php");

if (isset($_GET["question_id"]) && isset($_GET["qr_code"])) {
    $question_id = $_GET["question_id"];
    $qr_code = $_GET["qr_code"];
    $qa_sql = "SELECT * FROM qa WHERE id = $question_id ";
    $qa_result = mysqli_query($conn, $qa_sql);

    if (mysqli_num_rows($qa_result) > 0) {
        $qa_row = mysqli_fetch_assoc($qa_result);
        $code = $qa_row['code'];

}
    if ($qr_code == $code) {
        $current_time = date("Y-m-d H:i:s");
        $update_sql = "INSERT INTO game (username, qa_id, time) VALUES ('$username', '$question_id', '$current_time')";
        if (mysqli_query($conn, $update_sql)) {
            header("Location: ../../home.php?message=Task Completed");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        header("Location: ../../home.php?error=Invalid QR Code");
        exit;
    }
}
?>
