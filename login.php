<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head.php");
include("./functions/db/database.php");?>
<body>
    <?php if(isset($_GET["error"])){
        echo "".$_GET["error"]."";
    }else if(isset($_GET["success"])){

        echo "".$_GET["success"]."";
    }
    
    ?>
<form method="POST" action="./functions/handlers/login-process.php">
<input name="username">
<input name="email">
<input name="password">
<button type="submit" name="login">REGISTER</button>
</form>
</body>
</html>