<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head.php");
include("./functions/db/database.php");
include("./functions/check/session-check.php");
?>
<body>
 <form class="box" method="POST" action="./functions/handlers/register-process.php">
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
  <h1>register</h1> 
  <input type="text"  name="username" placeholder="Enter Your Username">
  <input type="text"  name="email" placeholder="Enter Your Email">
  <input type="password" name="password" placeholder="Enter Your Password">
  <button type="submit" class="button" name="register">register</button>
  <a href="./index.php" class="create_account">Already Have An Account</a>
</form>

</body>
</html>