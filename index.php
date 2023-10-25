<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head.php");
include("./functions/db/database.php");
include("./functions/check/session-check.php");
?>
<body>
 <form class="box" method="POST" action="./functions/handlers/login-process.php">
 <a class="create_account">  
      <?php if(isset($_GET["error"])){
        echo '<span class="flex material-symbols-outlined">
        error
        </span> <br>'.$_GET["error"].'';
    }else if(isset($_GET["success"])){

        echo '<span class="material-symbols-outlined">
        check
        </span>'.$_GET["success"].'';
    }
    
    ?>
    </a>
  <h1>Login</h1> 
  <input type="text"  name="username" placeholder="Username or  Email">
  <input type="password" name="register" placeholder="Password">
  <button type="submit" class="button" name="login">login</button>
  <a class="create_account" href="./register.php">Create An Account</a>
</form>

<footer>
  <div class="footer">
  Powered by <a href="./aboutus.php">AlphaNodesDev 😍 😍 😍 </a>
  </div>
  </footer>
</body>

</html>