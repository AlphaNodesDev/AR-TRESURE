<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head-home.php");
include("./functions/db/database.php");
include("./functions/check/login-check.php");?>
<body>

        <div class="top-nav">
        <span>Welcome, <?php echo $username; ?></span>
        <a href="./functions/handlers/logout.php">Logout</a>
    </div>
    <div class="sidebar">

    </div>
    <?php if(isset($_GET['error'])) { echo '<div id="alert-box" class="alert">
    <span class="closebtn"  onclick="clearMessageQueryParam()">&times;</span>
    <div id="alert-text">'.$_GET['error'].'</div></div>'; }
     else if(isset($_GET['success'])) { echo '<div id="alert-box" class="alert">
        <span class="closebtn" onclick="clearMessageQueryParam()">&times;</span>
        <div id="alert-text">'.$_GET['success'].'</div></div>'; }
      else if(isset($_GET['message'])) { echo '<div id="alert-box" class="alert">
        <span class="closebtn"  onclick="clearMessageQueryParam()">&times;</span>
        <div id="alert-text">'.$_GET['message'].'</div></div>'; } ?>

    


<div class="card">
      <div class="card-header">
        <h2>Questions</h2>
      </div>
      <hr />
      <div class="card-body">
        <h2 id="question" class="card-title">Question</h2>
        <ul>
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
      </div>
      <div class="card-footer">
        <button id="submit" class="btn">Scan Qr</button>
      </div>
    </div>



</body>
<script src="./assets/js/script.js"></script>
</html>