<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head-home.php");
include("./functions/db/database.php");
include("./functions/check/login-check.php");?>
<style>
  /* Styles for the alert box */
.alert2 {
    background-color: #df0000;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    border-radius: 12px;
    top: 5%;
    left: 50%;
    transform: translateX(-50%);
    width: 70%;
    z-index: 100;
}
/* Styles for the alert box */
.alert {
    background-color: #00d81d;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    top: 5%;
    border-radius: 12px;
    left: 50%;
    transform: translateX(-50%);
    width: 70%;
    z-index: 100;
}

  </style>
<body onload="countdown()">

        <div class="top-nav">
        <span>Welcome, <?php echo $username; ?></span>
        <a href="./functions/handlers/logout.php">Logout</a>
    </div>
    <div class="sidebar">
    </div>
    <?php
if (isset($_GET['message'])) {
    echo '<div id="alert-box" class="alert">
    <span class="timer" id="timer">15</span>
    <div id="alert-text">' . $_GET['message'] . '</div>
    </div>';
}else if (isset($_GET['error'])) {
  echo '<div id="alert-box" class="alert2">
 <span class="timer" id="timer">15</span>
  <div id="alert-text">' . $_GET['error'] . '</div>
  </div>';
}
?>





<div class="card">
      <div class="card-header" >
        <h2>Questions</h2>
      </div>
      <hr />
      <div class="card-body">
      <?php
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $current_qa = $row['current_qa'];
    $elapsed_time = $row['elapsed_time'];
}

// Check if there is a corresponding QA record
$sql = "SELECT * FROM game WHERE qa_id = $current_qa AND username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    // If no corresponding QA record exists, select the QA data by current_qa
    $qa_sql = "SELECT * FROM qa WHERE id = $current_qa";
    $qa_result = mysqli_query($conn, $qa_sql);

    if (mysqli_num_rows($qa_result) > 0) {
        $qa_row = mysqli_fetch_assoc($qa_result);
        $question = $qa_row['question'];
        $question_id = $qa_row['id'];

    }
}else if (mysqli_num_rows($result) != 0) {

$random_qa_sql = "SELECT * FROM qa WHERE id NOT IN (SELECT qa_id FROM game WHERE username = '$username') ORDER BY RAND() LIMIT 1";
$random_qa_result = mysqli_query($conn, $random_qa_sql);

if (mysqli_num_rows($random_qa_result) > 0) {
    $random_qa_row = mysqli_fetch_assoc($random_qa_result);
    $random_question_id = $random_qa_row['id'];

    // Update current_qa with the randomly selected question_id
    $update_sql = "UPDATE users SET current_qa = $random_question_id WHERE username = '$username'";
    mysqli_query($conn, $update_sql);
      // If no corresponding QA record exists, select the QA data by current_qa
      $qa_sql = "SELECT * FROM qa WHERE id = $random_question_id";
      $qa_result = mysqli_query($conn, $qa_sql);
  
      if (mysqli_num_rows($qa_result) > 0) {
          $qa_row = mysqli_fetch_assoc($qa_result);
          $question = $qa_row['question'];
          $question_id = $qa_row['id'];

}
}
else {
  if($elapsed_time == NULL){
    $current_datetime = date("Y-m-d H:i:s");
    $update_sql_time = "UPDATE users SET elapsed_time = '$current_datetime' WHERE username = '$username'";
    mysqli_query($conn, $update_sql_time);
  }
  $update_sql = "UPDATE users SET game_status = '1' WHERE username = '$username'";
  $update_status = mysqli_query($conn, $update_sql);
  if($update_status = TRUE){
    echo "<script>window.location.href = './result.php';</script>";
  }
  
}
}
?>


<h2 id="question" class="card-title"><?php echo $question; ?></h2>


        
      </div>
      <div class="card-footer">
        <button onclick="window.location.href=('./functions/handlers/scan_qr.php?question_id=<?php echo $question_id?>')" class="btn">Scan Qr</button>
      </div>
    </div>


    <!---<ul>
          <li>
            <input type="radio" id="a" name="answer" class="answer" />
            <label for="a" id="aText">Question</label>
          </li>
          <li>
            <input type="radio" id="b" name="answer" class="answer" />
            <label for="b" id="bText">Question</label>
          </li>
          <li>
            <input type="radio" id="c" name="answer" class="answer" />
            <label for="c" id="cText">Question</label>
          </li>
          <li>
            <input type="radio" id="d" name="answer" class="answer" />
            <label for="d" id="dText">Question</label>
          </li>
        </ul>

-->


</body>
<script>
  function removeAlert_btn(){
    
  alertBox.style.display = 'none';
          window.history.replaceState({}, document.title, 'home.php');
}
  document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL
    var currentUrl = window.location.href;

    // Check if the URL contains "home.php?message="
    if (currentUrl.indexOf("home.php?message=") !== -1) {
      function removeAlert() {
        var alertBox = document.getElementById('alert-box');
        if (alertBox) {
          alertBox.style.display = 'none';
          window.history.replaceState({}, document.title, 'home.php');
        }
      }

      function countdown() {
        var timer = document.getElementById('timer');
        var count = parseInt(timer.innerText);
        if (count > 0) {
          count--;
          timer.innerText = count;
          setTimeout(countdown, 1000);
        } else {
          removeAlert();
        }
      }

      countdown();
    }
   else if (currentUrl.indexOf("home.php?error=") !== -1) {
      function removeAlert() {
        var alertBox = document.getElementById('alert-box');
        if (alertBox) {
          alertBox.style.display = 'none';
          window.history.replaceState({}, document.title, 'home.php');
        }
      }

      function countdown() {
        var timer = document.getElementById('timer');
        var count = parseInt(timer.innerText);
        if (count > 0) {
          count--;
          timer.innerText = count;
          setTimeout(countdown, 1000);
        } else {
          removeAlert();
        }
      }

      countdown();
    }
    else if (currentUrl.indexOf("home.php?success=") !== -1) {
      function removeAlert() {
        var alertBox = document.getElementById('alert-box');
        if (alertBox) {
          alertBox.style.display = 'none';
          window.history.replaceState({}, document.title, 'home.php');
        }
      }

      function countdown() {
        var timer = document.getElementById('timer');
        var count = parseInt(timer.innerText);
        if (count > 0) {
          count--;
          timer.innerText = count;
          setTimeout(countdown, 1000);
        } else {
          removeAlert();
        }
      }

      countdown();
    }


  });
</script>

</html>