<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head-home.php");
include("./functions/db/database.php");
include("./functions/check/login-check.php");?>

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
        <span class="closebtn" onclick="removeAlert()"><span class="timer" id="timer">15</span>&times;</span>
        <div id="alert-text">' . $_GET['message'] . '</div>
    </div>';
}
?>




<div class="card">
      <div class="card-header">
        <h2>Questions</h2>
      </div>
      <hr />
      <div class="card-body">
      <?php


$query2 = "SELECT * FROM game WHERE username = '$username'";

$result2 = mysqli_query($conn, $query2);

$query = "SELECT question FROM qa ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $query);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $question = $row['question'];
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
        <button id="submit" class="btn">Scan Qr</button>
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
  });
</script>

</html>