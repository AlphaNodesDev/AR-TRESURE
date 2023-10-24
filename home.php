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


$query2 = "SELECT * FROM game WHERE username = '$username'";

$result2 = mysqli_query($conn, $query2);

$query = "SELECT * FROM qa ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $query);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $question = $row['question'];
        $question_id = $row['id'];
        echo '<h2 id="question" class="card-title">' . $question . '</h2>';
    } else {
        echo '<h2 id="question" class="card-title">No questions available.</h2>';
    }
    mysqli_free_result($result);
} else {
    echo '<h2 id="question" class="card-title">Database error: ' . mysqli_error($conn) . '</h2>';
}
?>
        
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