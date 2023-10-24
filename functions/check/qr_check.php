<?php

if(isset($_GET["question_id"]) && $_GET["qr_code"]) {


    $question_id = $_GET["question_id"];
    $qr_code = $_GET["qr_code"];
  if($qr_code == $question_id) {
    echo "<script>window.location.href = '../../home.php?message=Task Completed ';</script>";
  
  }else{
    echo "<script>window.location.href = '../../home.php?error=Invalid QR Code';</script>";
  }
}

?>