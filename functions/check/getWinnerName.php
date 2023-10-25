<?php
include("./functions/db/database.php");

$sql = "SELECT winner_name FROM winner";
$result = mysqli_query($conn, $sql);

$response = array();

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $response['winner_name'] = $row['winner_name'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
